<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use App\Models\User;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //

    public function dashboard()
    {
        
        $umfrage_agents = User::role(['umfrage_agent'])->get();
        $callagents = User::role(['call_agent'])->get();
        
        return view('dashboard', compact('umfrage_agents', 'callagents'));
    }

    public function leadsOfSupervisor()
    {
        $lead  = Lead::where('completed', 0)->where('assign_to_id_call', null)->where('assign_to_id_team_leader', null)->get();
        return $lead;
    }
}
