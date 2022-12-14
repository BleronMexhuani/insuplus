<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Lead;

class UmfrageAgentController extends Controller
{
    //
    public function create_lead(Request $request)
    {


        $request['assigned_from'] = Auth::id();

        if ($request['sprachen']) {
            $request['sprachen'] = implode(",", $request['sprachen']);
        }
        $check_if_duplicate = Lead::where('handy_nummer',$request->handy_nummer)->count();

        $request['is_duplicate'] = $check_if_duplicate ? 'true' : 'false';
        
        Lead::create($request->except('_token'));

        return redirect()->back()->with('success', 'Successfuly inserted');
    }
    public function getLeads(Request $req)
    {
        $leads = Lead::where('assigned_from', Auth::user()->id)->where('vorname', 'LIKE', '%' . $req->vorname . '%')->orderBy('created_at','desc')->paginate(25);
        $leads->appends($_GET)->links();
        return view('roles.umfrage_agent.leads', compact('leads'));
    }
    public function chartumfrage(Request $req)
    {
        if ($req->from === null && $req->from === null) {
            $leads = Lead::Select('bestatigungs_status')
                ->selectRaw('bestatigungs_status,COUNT(*) as number')
                ->where('assigned_from', Auth::user()->id)
                ->groupBy('bestatigungs_status')
                ->get();
        } else {
            $leads = Lead::Select('bestatigungs_status')
                ->selectRaw('bestatigungs_status,COUNT(*) as number')
                ->whereBetween('created_at', [$req->from, $req->to])
                ->where('assigned_from', Auth::user()->id)
                ->groupBy('bestatigungs_status')
                ->get();
        }
        $array = [];
        foreach ($leads as $lead) {
            array_push($array, [$lead->bestatigungs_status, $lead->number]);
        }
        return $array;
    }
}
