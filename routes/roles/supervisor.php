<?php

use App\Http\Controllers\SupervisorController;
use Illuminate\Support\Facades\Route;

Route::middleware(['role:supervisor'])->group(function () {

    // Route::get('/dashboard', [SupervisorController::class, 'dashboard'])->name('dashboard');

    Route::post("supervisor/assignLead", [SupervisorController::class, 'assignLead'])->name('assignLead');

    Route::get("users", [SupervisorController::class, 'getUsers'])->name('getusers');

    Route::get('user_info/{id}', [SupervisorController::class, 'getUserById'])->name('getuserbyid');

    Route::get('supervisor/leads', [SupervisorController::class, 'leads'])->name('supervisorleads');


    Route::post('supervisor/leads', [SupervisorController::class, 'leads'])->name('searchLeads');
    //Updating user
    Route::put('update_user/{id}', [SupervisorController::class, 'updateUser'])->name('updateUser');
    //Delete User by ID
    Route::get('delete_user/{id}', [SupervisorController::class, 'deleteUser'])->name('deleteUser');

    Route::get('delete_lead/{id}',[SupervisorController::class,'deleteLead'])->name('deleteLead');

    Route::view('/createUser', 'roles.supervisor.create_user')->name('createUser');

    Route::post('/createUser/add', [SupervisorController::class, 'addUser'])->name('createUser.add');

    Route::get('getLeadById/{id}', [SupervisorController::class, 'getLeadById'])->name('getLeadById');

    Route::get('/createGroup', [SupervisorController::class, 'getGroupInfo'])->name('createGroup');

    Route::post('handleSubmitCreateGroup', [SupervisorController::class, 'createGroup'])->name('handleSubmitCreateGroup');

    Route::post('supervisor/storeFeedBack/{lead_id}', [SupervisorController::class, 'storeFeedBack'])->name('supervisor.storeFeedBack');

    Route::get('supervisor/teams',[SupervisorController::class,'getGroups'])->name('getGroups');

    Route::get('supervisor/team/{id}',[SupervisorController::class,'getGroupById'])->name('getGroupById');

    Route::post('supervisor/editTeam',[SupervisorController::class,'editTeam'])->name('editTeam');

    Route::view('advancedFilter','roles.supervisor.advanced_filter')->name('advancedFilter');
    //EXPORT CSV 
    Route::get('supervisor/exportcsv',[SupervisorController::class,'exportCSV'])->name('exportcsv');
    //Dashboard Filter by today this week this month total,
    Route::get('supervisor/filterLeads',[SupervisorController::class,'dashboardFilterLeads'])->name('dashboardFilterLeads');

    //Supervisor Charts 
    Route::get('umfrage_first_chart', [SupervisorController::class, 'umfrage_first_chart'])->name('umfrage_first_chart');
    Route::get('umfrage_second_chart', [SupervisorController::class, 'umfrage_second_chart'])->name('umfrage_second_chart');
    Route::get('call_agent_first_chart', [SupervisorController::class, 'call_agent_first_chart'])->name('call_agent_first_chart');
    Route::get('call_agent_second_chart', [SupervisorController::class, 'call_agent_second_chart'])->name('call_agent_second_chart');

    
});
