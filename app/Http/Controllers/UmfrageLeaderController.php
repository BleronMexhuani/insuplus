<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UmfrageLeaderController extends Controller
{
    //
    public function getLeads(Request $req)
    {
        $leads = Lead::where('vorname', 'LIKE', '%' . $req->vorname . '%')->orderBy('created_at','desc')->paginate(25);
        $leads->appends($_GET)->links();
        return view('roles.umfrage_leader.leads', compact('leads'));
    }
}
