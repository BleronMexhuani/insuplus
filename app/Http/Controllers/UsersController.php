<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    //

    public function dashboard()
    {

        $umfrage_agents = User::role(['umfrage_agent'])->get();
        $callagents = User::role(['call_agent'])->get();
        $today = '';
        $month = '';
        $week = '';
        $total_leads = 0;
        $total_terminert = 0;

        if (Auth::user()->hasRole(['call_agent'])) {

            $today = Lead::where('assign_to_id_call', Auth::user()->id)->whereDate('verteilen_datum', Carbon::today())->count();
            $month = Lead::where('assign_to_id_call', Auth::user()->id)->whereMonth('verteilen_datum', now()->month)->count();
            $week = Lead::where('assign_to_id_call', Auth::user()->id)->whereBetween('verteilen_datum', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->count();
        } elseif (Auth::user()->hasRole(['umfrage_agent'])) {
            $today = Lead::where('assigned_from', Auth::user()->id)->whereDate('created_at', Carbon::today())->count();
            $month = Lead::where('assigned_from', Auth::user()->id)->whereMonth('created_at', now()->month)->count();
            $week = Lead::where('assigned_from', Auth::user()->id)->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->count();
        } elseif (Auth::user()->hasRole(['quality_agent'])) {
            $today = Lead::whereDate('verteilen_datum', Carbon::today())->count();
            $month = Lead::whereMonth('verteilen_datum', now()->month)->count();
            $week = Lead::whereBetween('verteilen_datum', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->count();
        } elseif (Auth::user()->hasRole(['confirmation_agent'])) {
            $today = Lead::Select('completed')->whereDate('created_at', Carbon::today())->count();
            $month = Lead::Select('completed')->whereMonth('created_at', now()->month)->count();
            $week = Lead::Select('completed')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->count();
        }

        $total_leads = Lead::all()->count();
        $total_terminert = Lead::where('feedback_status','Terminiert')->count();
        return view('dashboard', compact('umfrage_agents', 'callagents', 'week', 'today', 'month','total_leads','total_terminert'));
    }

    public function leadsOfSupervisor()
    {
        $lead  = Lead::where('completed', 0)->where('assign_to_id_call', null)->where('assign_to_id_team_leader', null)->get();
        return $lead;
    }
}
