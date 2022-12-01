<?php

use App\Http\Controllers\UmfrageAgentController;
use Illuminate\Support\Facades\Route;

Route::middleware(['role:umfrage_agent'])->group(function () {
    Route::post('/create_leads', [UmfrageAgentController::class, 'create_lead'])->name('create_lead');
    Route::view('/createLead','roles.umfrage_agent.leads')->name('createLeadView');
});
