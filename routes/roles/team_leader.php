<?php

use App\Http\Controllers\TeamLeaderController;
use Illuminate\Support\Facades\Route;

Route::middleware(['role:team_leader'])->group(function () {    


    Route::get('team_leader/leads',[TeamLeaderController::class,'leads'])->name('leads.team_leader');

});
