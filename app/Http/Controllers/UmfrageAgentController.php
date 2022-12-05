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

        // Lead::create($request->except('_token'));
        $request['assigned_from'] = Auth::id();

        if ($request['sprachen']) {
            $request['sprachen'] = implode(",", $request['sprachen']);
        }

        Lead::create($request->except('_token',));

        return redirect()->back()->with('success', 'Successfuly inserted');
    }
    public function getLeads()
    {
        $leads = Lead::where('assigned_from', Auth::user()->id)->get();

        return view('roles.umfrage_agent.leads', compact('leads'));
    }
}
