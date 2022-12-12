<?php

namespace App\Http\Controllers;

use App\Models\FeedBack;
use App\Models\Lead;
use App\Models\Team;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;



class SupervisorController extends Controller
{

    public function leads(Request $req)
    {
        $callagents = User::role(['call_agent'])->get();
        $umfrage_agents = User::role(['umfrage_agent'])->get();
        $teams = Team::all();
        $leads = $this->leadsOfSupervisor($req);

        return view('roles.supervisor.leads', compact('callagents', 'leads', 'umfrage_agents', 'teams'));
    }

    public function leadsOfSupervisor(Request $req)
    {

        $lead = Lead::query();

        foreach ($req->except('_token') as $key => $value) {
            if (is_array($req->$key) && $key!=='teams') {
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
                $lead->where($key, $value);
            }
        }

        return $lead->orderBy('created_at', 'desc')->get();
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
}
