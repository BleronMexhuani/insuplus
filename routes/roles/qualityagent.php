<?php

use App\Http\Controllers\QualityAgentController;
use Illuminate\Support\Facades\Route;

Route::middleware(['role:quality_agent'])->group(function () {
    Route::get('quality_agent/leads', [QualityAgentController::class, 'getLeads'])->name('quality_leads');
    Route::get('quality_agent/lead_info/{id}', [QualityAgentController::class, 'getLeadById'])->name('lead_info');
    Route::post('quality_agent/submit_lead/{lead_id}',[QualityAgentController::class,'storeFeedBack'])->name('storeFeedBackQA');
    
});
