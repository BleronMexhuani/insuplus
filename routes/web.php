<?php

use App\Http\Controllers\ManagersController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/dashboard', [UsersController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    require __DIR__ . '/roles/manager.php';
    // require __DIR__ . '/roles/supervisor.php';
    require __DIR__ . '/roles/umfrage.php';
    require __DIR__ . '/roles/callagent.php';
    require __DIR__ . '/roles/qualityagent.php';
    require __DIR__ . '/roles/confirmation_agent.php';
    require __DIR__ .'/roles/team_leader.php';
});

require __DIR__ . '/auth.php';
