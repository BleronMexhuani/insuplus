<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
    public function umfrage_chart(Request $req)
    {
        $php_data_array = array();

        for ($i = 0; $i < sizeof($req->umfrage_agents); $i++) {
            $leads = Lead::query()->selectRaw('users.name,DATE_FORMAT(leads.created_at, "%d-%b-%Y") as date,COUNT(*) as asd')
            ->join('users', 'users.id', 'assigned_from')
            ->whereBetween('leads.created_at', [$req->umfrage_grafik_von, $req->umfrage_grafik_bis])
            ->where('assigned_from', $req->umfrage_agents[$i])
            ->groupBy(DB::raw('DATE_FORMAT(leads.created_at, "%Y-%m-%d")'));

            $php_data_array[] = $leads->get();
        }

        return json_encode($php_data_array);
    }
}
