<?php

use App\Http\Controllers\CallAgentController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'role:call_agent'])->group(function () {
    Route::get('leads', [CallAgentController::class, 'getLeads'])->name('callagentleads');
    Route::post('storeFeedBack/{lead_id}', [CallAgentController::class, 'storeFeedBack'])->name('storeFeedBack');
    Route::get('lead_info/{id}', [CallAgentController::class, 'getLeadById'])->name('lead_info.call');
    Route::get('/chart', [CallAgentController::class, 'chart'])->name('chart');
});
