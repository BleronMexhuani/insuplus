<?php

namespace App\Http\Controllers;

use App\Models\FeedBack;
use App\Models\Lead;
use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QualityAgentController extends Controller
{

    public function getLeads(Request $req)
    {

        $callagents = User::role(['call_agent'])->get();
        $umfrage_agents = User::role(['umfrage_agent'])->get();
        $teams = Team::all();
        $leads = $this->leadsOfQuality($req);
        $leads->appends($_GET)->links();

        return view('roles.quality_agent.leads', compact('leads', 'callagents', 'umfrage_agents', 'teams'));
    }
    public function leadsOfQuality(Request $req)
    {

        $lead = Lead::query();
        $lead->whereIn('feedback_status', ['Terminiert', 'online_offerte'])->where('completed', 1);

        foreach ($req->except('_token','page') as $key => $value) {
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
            } else  {
                $value_on_array  = $value;
         
                if ($key == 'sprachen') {
                    $lead->where(function ($q) use ($key, $value_on_array) {
                        for ($i = 0; $i < count($value_on_array); $i++) {
                            $q->orWhereRaw('FIND_IN_SET(?, ' . $key . ')', [$value_on_array[$i]]);
                        }
                    });
                } 
                else if($key=='vorname'){
                    $lead->where('vorname','LIKE','%'.$value_on_array.'%');
                }
                else {
                    $lead->whereIn($key, $value_on_array);
                }
            }
        }

        return $lead->orderBy('created_at', 'desc')->paginate(25);
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
            'feedback' => $req->feedback_status_quality_check,
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

        if ($req->feedback_status_quality_check == 'confirmed') {
            Lead::where('id', $lead_id)->update(['completed' => 2,
            'feedback_status_quality_check'=>$req->feedback_status_quality_check
            ]);
        } else {
            Lead::where('id', $lead_id)->update(['completed' => 0, 
            'feedback_status_quality_check'=>$req->feedback_status_quality_check
        ]);
        }


        return redirect('quality_agent/leads');
    }
    public function chartquality_agent(Request $req){
        if($req->from === null && $req->from === null){
            $leads = Lead::Select('feedback_status_quality_check')
            ->selectRaw('feedback_status_quality_check,COUNT(*) as number')
            ->groupBy('feedback_status_quality_check')
            ->get();
        }else{
            $leads = Lead::Select('feedback_status_quality_check')
            ->selectRaw('feedback_status_quality_check,COUNT(*) as number')
            ->whereBetween('created_at',[$req->from , $req->to])
           
            ->groupBy('feedback_status_quality_check')
            ->get();
        }
        $array=[];
        foreach($leads as $lead) {
            array_push($array, [$lead->feedback_status_quality_check, $lead->number]);
        }
        return $array;
    }
}
