<?php

use App\Http\Controllers\TeamLeaderController;
use Illuminate\Support\Facades\Route;

Route::middleware(['role:team_leader'])->group(function () {    

    Route::post("assignLead", [TeamLeaderController::class, 'assignLead'])->name('assignLead_team_leader');
    Route::get('team_leader/leads',[TeamLeaderController::class,'leads'])->name('leads.team_leader');
    Route::get('team_leader/{id}',[TeamLeaderController::class,'getLeadById'])->name('team_leader.lead_info');

});
