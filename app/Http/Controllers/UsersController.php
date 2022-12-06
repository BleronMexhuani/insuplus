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
        $callagent = User::role(['call_agent'])->get();

        $leadSuperVisor = $this->leadsOfSupervisor();

        return view('dashboard', compact('callagent', 'leadSuperVisor'));
    }

    public function leadsOfSupervisor()
    {
        $lead  = Lead::where('completed', 0)->where('assign_to_id_call', null)->where('assign_to_id_team_leader', null)->get();
        return $lead;
    }
}
