<?php

namespace App\Http\Controllers;

use App\Models\FeedBack;
use App\Models\Lead;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CallAgentController extends Controller
{
    //
    public function getLeads(Request $req)
    {
        $leads = $this->leadsOfCallAgent($req);
        $leads->appends($_GET)->links();

        return view('roles.call_agent.leads', compact('leads'));
    }

    public function leadsOfCallAgent(Request $req)
    {

        $lead = Lead::query();
        $lead->where('assign_to_id_call', Auth::user()->id);

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
                    $lead->whereIn($key, $value_on_array);
                }
            }
        }

        return $lead->orderBy('created_at', 'desc')->paginate(25);
    }
    public function getLeadById($id)
    {
        $lead =  Lead::find($id);

        if ($lead->assign_to_id_call == Auth::user()->id) {
            $feedbacks = CallAgentController::getAllFeedBacks($id);
            return view('roles.call_agent.lead_info', compact('lead', 'feedbacks'));
        } else {
            return redirect()->back();
        }
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
        return redirect('/leads');
    }

    public function chart(Request $req){
        if($req->from === null && $req->from === null ){
            $leads = Lead::Select('bestatigungs_status')
            ->selectRaw('bestatigungs_status,COUNT(*) as number')
            ->where('assign_to_id_call', Auth::user()->id)
            ->groupBy('bestatigungs_status')
            ->get();
        }else{
            $leads = Lead::Select('bestatigungs_status')
            ->selectRaw('bestatigungs_status,COUNT(*) as number')
            ->whereBetween('created_at',[$req->from , $req->to])
            ->where('assign_to_id_call', Auth::user()->id)
            ->groupBy('bestatigungs_status')
            ->get();
        }
        $array=[];
        foreach($leads as $lead) {
            array_push($array, [$lead->bestatigungs_status, $lead->number]);
        }
        return $array;
    }
}
