<?php

namespace App\Http\Controllers;

use App\Models\FeedBack;
use App\Models\Lead;
use App\Models\Team;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TeamLeaderController extends Controller
{
    //
    public function getLeadById($id)
    {
        $lead =  Lead::find($id);
        $last_feedback = $this->getLastFeedBack($id);

        $feedbacks = TeamLeaderController::getAllFeedBacks($id);
        return view('roles.team_leader.lead_info', compact('lead', 'feedbacks', 'last_feedback'));
    }
    public function getAllFeedBacks($id)
    {
        return FeedBack::where('lead_id', $id)->get();
    }
    public function getLastFeedBack($id)
    {
        return FeedBack::where('lead_id', $id)->latest()->first();
    }
    public function leads(Request $req)
    {
        $team = Team::where('team_leaders', Auth::id())->get();
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




        $leads = Lead::where(
            function ($q) use ($call_agents) {
                $q->where('assign_to_id_team_leader', Auth::id());
                $q->orWhereIn('assign_to_id_call', $call_agents);
            }
        );


        foreach ($req->except('_token', 'page') as $key => $value) {
            if ($key == 'created_at' || $key == 'verteilen_datum' || $key == 'geburtsdatum' || $key == 'anrufdatum') {
                if ($value[0] !== null && $value[1] !== null) {
                    $leads->whereBetween($key, $value);
                }
            } else {
                $value_on_array  = $value;

                if ($key == 'sprachen') {
                    $leads->where(function ($q) use ($key, $value_on_array) {
                        for ($i = 0; $i < count($value_on_array); $i++) {
                            $q->orWhereRaw('FIND_IN_SET(?, ' . $key . ')', [$value_on_array[$i]]);
                        }
                    });
                } else if ($key == 'vorname') {
                    $leads->where('vorname', 'LIKE', '%' . $value_on_array . '%');
                } else {
                    $leads->where(
                        function ($q) use ($key, $value_on_array) {
                            $q->whereIn($key, $value_on_array);
                            if ($key == 'feedback_status' && in_array('NULL', $value_on_array)) {
                                $q->orWhereNull('feedback_status');
                            }
                        }
                    );
                }
            }
        }

        $leads = $leads->orderBy('created_at', 'desc')->paginate(25);

        $leads->appends($_GET)->links();
        $callagents = User::whereIn('id', $call_agents)->get();

        return view('roles.team_leader.leads', compact('leads', 'callagents'));
    }
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
}
