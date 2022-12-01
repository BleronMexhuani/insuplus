<?php

use App\Http\Controllers\CallAgentController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'role:call_agent'])->group(function () {
    Route::get('/call_agent/leads', [CallAgentController::class, 'getLeads'])->name('callagentleads');
    Route::post('/storeFeedBack/{lead_id}', [CallAgentController::class, 'storeFeedBack'])->name('storeFeedBack');
    Route::get('call_agent/lead_info/{id}', [CallAgentController::class, 'getLeadById'])->name('lead_info');
});
