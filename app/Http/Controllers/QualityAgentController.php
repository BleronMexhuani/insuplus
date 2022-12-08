<?php

namespace App\Http\Controllers;

use App\Models\FeedBack;
use App\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QualityAgentController extends Controller
{
    //

    public function getLeads()
    {

        $leads =  Lead::whereIn('feedback_status', ['Terminiert','online_offerte'])->where('completed',1)->get();

        return view('roles.quality_agent.leads', compact('leads'));
    }

    public function getLeadById($id)
    {
        $lead =  Lead::find($id);
        $feedbacks = QualityAgentController::getAllFeedBacks($id);

        return view('roles.quality_agent.lead_info', compact('lead', 'feedbacks'));
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
            Lead::where('id', $lead_id)->update(['completed' => 2, 'feedback_status' => $req->feedback_status]);
        } else {
            Lead::where('id', $lead_id)->update(['completed' => 0, 'feedback_status' => $req->feedback_status]);
        }


        return redirect('quality_agent/leads');
    }
}
