<?php

use App\Http\Controllers\SupervisorController;
use Illuminate\Support\Facades\Route;

Route::middleware(['role:supervisor'])->group(function () {

    Route::post("assignLead", [SupervisorController::class, 'assignLead'])->name('assignLead');
    
    Route::get("users", [SupervisorController::class, 'getUsers'])->name('getusers');
    
    Route::get('user_info/{id}', [SupervisorController::class, 'getUserById'])->name('getuserbyid');

    Route::get('supervisor/leads',[SupervisorController::class,'leads'])->name('supervisorleads');

    Route::post('supervisor/leads',[SupervisorController::class,'leads'])->name('searchLeads');

    //Updating user
    Route::put('update_user/{id}',[SupervisorController::class,'updateUser'])->name('updateUser');
    //Delete User by ID
    Route::get('delete_user/{id}',[SupervisorController::class,'deleteUser'])->name('deleteUser');

    Route::view('/createUser', 'roles.supervisor.create_user')->name('createUser');

    Route::post('/createUser/add',[SupervisorController::class,'addUser'])->name('createUser.add');

    Route::get('getLeadById/{id}',[SupervisorController::class,'getLeadById'])->name('getLeadById');

    Route::get('/createGroup', [SupervisorController::class,'getGroupInfo'])->name('createGroup');

    Route::post('handleSubmitCreateGroup',[SupervisorController::class,'createGroup'])->name('handleSubmitCreateGroup');
});
