<?php

use App\Http\Controllers\UmfrageAgentController;
use App\Http\Controllers\UmfrageLeaderController;
use Illuminate\Support\Facades\Route;

Route::middleware(['role:umfrage_leader'])->group(function () {

    Route::get('/umfrage_leader/leads', [UmfrageLeaderController::class, 'getLeads'])->name('leads_umfrage_leader');
    Route::get('/umfrage_chart', [UmfrageLeaderController::class, 'umfrage_chart'])->name('umfrage_chart');


});