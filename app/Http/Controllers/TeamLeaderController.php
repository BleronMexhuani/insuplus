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

            $feedbacks = TeamLeaderController::getAllFeedBacks($id);
            return view('roles.call_agent.lead_info', compact('lead', 'feedbacks'));
      
    }
    public function getAllFeedBacks($id)
    {
        return FeedBack::where('lead_id', $id)->get();
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

    
        $leads = Lead::where('assign_to_id_team_leader',Auth::id())->orWhereIn('assign_to_id_call', $call_agents)->orderBy('verteilen_datum','desc')->paginate(10);

        $callagents = User::whereIn('id',$call_agents)->get();

        $leads->appends($req->all());

        return view('roles.team_leader.leads', compact('leads','callagents'));
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
