<?php

use App\Http\Controllers\SupervisorController;
use Illuminate\Support\Facades\Route;

Route::middleware(['role:supervisor'])->group(function () {
    Route::post("/assignLead", [SupervisorController::class, 'assignLead'])->name('assignLead');
});
