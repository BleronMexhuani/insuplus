<?php

namespace App\Http\Controllers;

use App\Models\FeedBack;
use App\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CallAgentController extends Controller
{
    //
    public function getLeads(Request $req)
    {

        $leads =  Lead::where('assign_to_id_call', Auth::user()->id)->where('vorname', 'LIKE', '%' . $req->search . '%')->get();

        return view('roles.call_agent.leads', compact('leads'));
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
}
