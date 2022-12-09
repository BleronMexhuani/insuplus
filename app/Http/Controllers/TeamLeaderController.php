<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeamLeaderController extends Controller
{
    //

    public function leads(){
      $team = Team::where('team_leaders',Auth::id())->get();
            }
    
}
