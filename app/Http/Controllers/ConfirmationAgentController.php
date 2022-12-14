<?php

namespace App\Http\Controllers;

use App\Models\FeedBack;
use App\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;



class ConfirmationAgentController extends Controller
{
    //
    public function getLeads()
    {
        $leads =  Lead::whereIn('feedback_status', ['Terminiert', 'Online-Offerte'])->where('completed', 2)->get();
        $termins = $this->getTerminsForDates();
        return view('roles.confirmation_agent.leads', compact('leads','termins'));
    }
    public function getTerminsForDates(){
        $termins = Lead::selectRaw('*,COUNT(*) as count')->WhereIn('feedback_status',['Terminiert'])->where('completed',2)->groupBy('termindatum')->get();
        return $termins;
    }

    public function getLeadById($id)
    {
        $lead =  Lead::find($id);
        $feedbacks = ConfirmationAgentController::getAllFeedBacks($id);

        return view('roles.confirmation_agent.lead_info', compact('lead', 'feedbacks'));
    }

    public function getAllFeedBacks($id)
    {
        return FeedBack::where('lead_id', $id)->get();
    }

    public function storeFeedBack(Request $req, $lead_id)
    {
        $req['user_id'] = Auth::user()->id;

        FeedBack::create([
            'feedback' => $req->feedback_status_confirmation,
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
        if ($req->feedback_status_confirmation == 'confirmed') {
            Lead::where('id', $lead_id)->update(['completed' => 3,'feedback_status_confirmation'=>$req->feedback_status_confirmation]);
        } else {
            Lead::where('id', $lead_id)->update(['completed' => -2,'feedback_status_confirmation'=>$req->feedback_status_confirmation]);
        }

        Http::post('https://crm.kutiza.com/insuplus_leads', $req->all());

        return redirect('confirmation_agent/leads');
    }



    public function chartcomfiramtion(Request $req)
    {
        $leads = Lead::query()
        ->selectRaw('completed,DATE_FORMAT(created_at, "%d-%b-%Y") as date,COUNT(*) as count')
        ->where('completed',3);
        if($req->from && $req->to){
            $leads ->whereBetween('created_at',[$req->from , $req->to]);
        }
        $leads->groupBy('created_at');
        return json_encode($leads->get());
    }
}
