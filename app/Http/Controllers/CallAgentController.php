<?php

namespace App\Http\Controllers;

use App\Models\FeedBack;
use App\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CallAgentController extends Controller
{
    //
    public function getLeads()
    {

        $leads =  Lead::where('assign_to_id_call', Auth::user()->id)
            ->where('completed', 0)
            ->get();

        return view('roles.call_agent.leads', compact('leads'));
    }
    public function getLeadById($id)
    {
        $lead =  Lead::find($id);

        if ($lead->assign_to_id_call == Auth::user()->id && $lead->completed == 0) {
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

        FeedBack::create([
            'feedback' => $req->feedback_status,
            'user_id' => Auth::user()->id,
            'lead_id' => $lead_id,
            'termin_datum' => $req->termin_datum,
            'terminzeit' => $req->terminzeit,
            "mitbewhoner" => $req->mitbewhoner,
            "person_krank" => $req->person_krank,
            "vertragdatum" => $req->vertragdatum,
            "bestatigungsstatus" => $req->bestatigungsstatus,
            "anrufdatum" => $req->anrufdatum,
            "zeit_anrufe" => $req->zeit_anrufe
        ]);
        if ($req->feedback_status == 'termin' || $req->feedback_status == 'online_offerte') {
            Lead::where('id', $lead_id)->update(['completed' => 1, 'feedback_status' => $req->feedback_status]);
        } else {
            Lead::where('id', $lead_id)->update(['completed' => -1, 'feedback_status' => $req->feedback_status]);
        }
        return redirect('call_agent/leads');
    }
}
