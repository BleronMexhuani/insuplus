<?php 

use App\Http\Controllers\ConfirmationAgentController;
use Illuminate\Support\Facades\Route;

Route::middleware(['role:confirmation_agent'])->group(function () {
    Route::get('confirmation_agent/leads', [ConfirmationAgentController::class, 'getLeads'])->name('confirmation_agent_leads');
    Route::post('storeFeedBackCA/{lead_id}',[ConfirmationAgentController::class, 'storeFeedBack'])->name('storeFeedBackCA');
    Route::get('confirmation_agent/lead_info/{id}', [ConfirmationAgentController::class, 'getLeadById'])->name('lead_info_ca');
});
