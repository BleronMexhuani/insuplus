<?php

namespace App\Http\Controllers;

use App\Models\FeedBack;
use App\Models\Lead;
use App\Models\Team;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Http\Request;
use Illuminate\Pagination\PaginationServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;





class SupervisorController extends Controller
{
    public function dashboard(Request $req)
    {
        $umfrage_agents = User::role(['umfrage_agent'])->get();
        $callagents = User::role(['call_agent'])->get();
        return view('dashboard', compact('umfrage_agents', 'callagents'));
    }

    public function umfrage_first_chart(Request $req)
    {
        $php_data_array = array();

        for ($i = 0; $i < sizeof($req->umfrage_agents); $i++) {
            $leads = Lead::query()->selectRaw('users.name,DATE_FORMAT(leads.created_at, "%d-%b-%Y") as date,COUNT(*) as asd')->join('users', 'users.id', 'assigned_from')->whereBetween('leads.created_at', [$req->umfrage_grafik_von, $req->umfrage_grafik_bis])->where('assigned_from', $req->umfrage_agents[$i])->groupBy('leads.created_at');

            $php_data_array[] = $leads->get();
        }

        return json_encode($php_data_array);
    }

    public function umfrage_second_chart(Request $req)
    {
        $php_data_array = array();

        $leads = Lead::query()->selectRaw('bestatigungs_status,COUNT(*) as asd')->whereIn('bestatigungs_status', $req->bestatigungstatus)->whereIn('assigned_from', $req->umfrage_agents)->groupBy('bestatigungs_status');
        $php_data_array[] = $leads->get();

        return json_encode($php_data_array);
    }
    public function call_agent_first_chart(Request $req)
    {
        $leads = Lead::query()->selectRaw('feedback_status,DATE_FORMAT(created_at, "%d-%b-%Y") as date,COUNT(*) as count')->where('assign_to_id_call', $req->callagent_benutzer)->where('feedback_status', 'Terminiert')->groupBy('created_at');

        return json_encode($leads->get());
    }

    public function call_agent_second_chart(Request $req)
    {


        $leads = Lead::query()->selectRaw('feedback_status,DATE_FORMAT(created_at, "%d-%b-%Y") as date,COUNT(*) as count')->where('assign_to_id_call', $req->benutzer)->whereIn('feedback_status', $req->feedback_status)->whereBetween('created_at', [$req->von, $req->bis])->groupBy('feedback_status');
        return json_encode($leads->get());
    }

    public function leads(Request $req)
    {
        $callagents = User::role(['call_agent'])->get();
        $umfrage_agents = User::role(['umfrage_agent'])->get();
        $team_leaders = User::role(['team_leader'])->get();

        $teams = Team::all();
        $leads = $this->leadsOfSupervisor($req);
        $leads->appends($req->all());

        return view('roles.supervisor.leads', compact('callagents', 'leads', 'umfrage_agents', 'teams', 'team_leaders'));
    }

    public function leadsOfSupervisor(Request $req)
    {

        $lead = Lead::query();

        foreach ($req->except('_token', 'page') as $key => $value) {
            if ($key == 'created_at' || $key == 'verteilen_datum' || $key == 'geburtsdatum' || $key == 'anrufdatum') {
                if ($value[0] !== null && $value[1] !== null) {

                    $lead->whereBetween($key, $value);
                }
            } else if ($key == 'teams') {

                $team = Team::whereIn('id', $value)->get();
                $call_agents = '';
                $umfrage_agents = '';

                for ($i = 0; $i < count($team); $i++) {
                    $call_agents .= $team[$i]->call_agents . ($i + 1 != count($team) ? ',' : '');
                    $umfrage_agents .= $team[$i]->umfrage_agents . ($i + 1 != count($team) ? ',' : '');
                }

                $call_agents = explode(',', $call_agents);
                $umfrage_agents = explode(',', $umfrage_agents);
                //make array unique
                $call_agents = array_unique($call_agents);
                $umfrage_agents = array_unique($umfrage_agents);

                //This is only for the moment , we can also add umfrage agents maybe later
                $lead->whereIn('assign_to_id_call', $call_agents);
            } else {
                $value_on_array  = $value;

                if ($key == 'sprachen') {
                    $lead->where(function ($q) use ($key, $value_on_array) {
                        for ($i = 0; $i < count($value_on_array); $i++) {
                            $q->orWhereRaw('FIND_IN_SET(?, ' . $key . ')', [$value_on_array[$i]]);
                        }
                    });
                } else if ($key == 'vorname') {
                    $lead->where('vorname', 'LIKE', '%' . $value_on_array . '%');
                } else {
                    if ($value_on_array[0] != null)
                        $lead->whereIn($key, $value_on_array);
                }
            }
        }
        // dd($lead->toSql());
        return $lead->orderBy('created_at', 'desc')->paginate(25);
    }

    //
    public function assignLead(Request $req)
    {

        if (isset($req->lead_id)) {
            $req['verteilen_datum'] = Carbon::parse()->timezone('Europe/Stockholm')->format('Y-m-d h:i:s');
            Lead::whereIn('id', $req->lead_id)->update($req->except('_token', 'lead_id'));
            $message = 'Succesfully leads are assigned';
        } else {
            $message = 'You must select a lead first to assign';
        }
        return redirect()->back()->with('message', $message);
    }
    public function getUsers()
    {
        $users = User::all();

        return view('roles.supervisor.users', compact('users'));
    }
    public function getUserById($id)
    {
        $user = User::find($id);

        return view('roles.supervisor.user_info', compact('user'));
    }

    public function updateUser(Request $req, $id)
    {
        User::find($id)->update($req->except('_token', 'role'));
        User::find($id)->syncRoles($req->role);

        return redirect()->back()->with('success', 'The user was updated succesfully');
    }

    public function deleteUser($id)
    {
        $user = User::find($id);

        $user->delete();

        return redirect()->back()->with('success', 'The user was deleted succesfully');
    }
    public function addUser(Request $request)
    {
        $request['password'] = Hash::make($request->password);
        $user = User::create($request->except('_token', 'role'));
        $user->assignRole($request->role);
        return redirect()->back()->with('success', 'The user was created succesfully');
    }
    public function getLeadById($id)
    {
        $lead = Lead::find($id);
        $feedbacks = $this->getAllFeedBacks($id);

        return view('roles.supervisor.lead_info', compact('lead', 'feedbacks'));
    }
    public function getAllFeedBacks($id)
    {
        return FeedBack::where('lead_id', $id)->get();
    }
    public function storeFeedBack(Request $req, $lead_id)
    {

        $req['user_id'] = Auth::user()->id;
        if ($req['sprachen']) {
            $req['sprachen'] = implode(",", $req['sprachen']);
        }
        Lead::find($lead_id)->update($req->except(
            "feedback",
            "user_id",
            "lead_id",
            "termindatum",
            "terminzeit",
            "mitbewhoner",
            "person_krank",
            "vertragdatum",
            "bestatigungsstatus",
            "anrufdatum",
            "zeit_anrufe",
            "koment_der_geburtsdatum",
            "koment_der_Können"
        ));

        FeedBack::create([
            'feedback' => $req->feedback_status,
            'user_id' => Auth::user()->id,
            'lead_id' => $lead_id,
            'termin_datum' => $req->termindatum,
            'terminzeit' => $req->terminzeit,
            "mitbewhoner" => $req->mitbewhoner,
            "person_krank" => $req->person_krank,
            "vertragdatum" => $req->vertragdatum,
            "bestatigungsstatus" => $req->bestatigungsstatus,
            "anrufdatum" => $req->anrufdatum,
            "zeit_anrufe" => $req->zeit_anrufe,
            "bemerkung" => $req->bemerkung
        ]);
        if ($req->feedback_status == 'Terminiert' || $req->feedback_status == 'online_offerte') {
            Lead::where('id', $lead_id)->update(['completed' => 1, 'feedback_status' => $req->feedback_status]);
        } else {
            Lead::where('id', $lead_id)->update(['completed' => -1, 'feedback_status' => $req->feedback_status]);
        }
        return redirect('supervisor/leads');
    }
    public function getGroupInfo()
    {

        $umfrage = User::role(['umfrage_agent'])->get();
        $callagents = User::role(['call_agent'])->get();
        $team_leaders = User::role(['team_leader'])->get();
        return view('roles.supervisor.create_group', compact('umfrage', 'callagents', 'team_leaders'));
    }

    public function createGroup(Request $req)
    {

        $req['umfrage_agents'] =  implode(",", $req['umfrage_agents']);
        $req['call_agents']  =  implode(",", $req['call_agents']);
        $req['team_leaders'] =  implode(",", $req['team_leaders']);

        Team::create($req->except('_token'));

        return redirect()->back();
    }

    public function getGroups()
    {
        $teams = Team::all();

        return view('roles.supervisor.teams', compact('teams'));
    }
    public function getGroupById(Request $req)
    {
        $team = Team::find($req->id);
        $call_agents =  User::role(['call_agent'])->get();

        $umfrage_agents =  User::role(['umfrage_agent'])->get();
        // $call_agents = User::whereIn('id',explode(',',$team->call_agents))->get();

        return view('roles.supervisor.team', compact('team', 'call_agents', 'umfrage_agents'));
    }
    public function editTeam(Request $req)
    {

        Team::find($req->id)->update([
            'group_name' => $req->group_name,
            'call_agents' => implode(',', $req->call_agents),
            'umfrage_agents' => implode(',', $req->umfrage_agents)
        ]);

        return redirect()->back();
    }
}
