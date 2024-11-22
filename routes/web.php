<?php
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\SupervisorController;
use App\Http\Controllers\SupervisorDashboardController;
use App\Http\Controllers\SupervisorLoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
//admin
Route::middleware(['role:Admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/supervisor', [SupervisorController::class, 'supervisor'])->name('supervisor');
    Route::get('/create/supervisor', [SupervisorController::class, 'create'])->name('create/supervisor');
    Route::post('/supervisor/admin/add', [SupervisorController::class, 'store'])->name('storeSupervisor')->middleware('auth');

    // branches
    Route::get('/branchView', [BranchController::class, 'getBranch'])->name('getBranch');
    Route::get('/branch', [BranchController::class, 'branch'])->name('branch');
    Route::post('/insertBranch', [BranchController::class, 'insertBranch'])->name('insert-branch');

});
//supervisor|admin
// Route::middleware(['role:Admin|Supervisor'])->group(function () {

// });

Route::get('/logout', [SupervisorDashboardController::class, 'logout'])->name('logout');

//supervisor login
Route::get('/', [SupervisorLoginController::class, 'showLogin'])->name('Login');
Route::post('/loginSup', [SupervisorLoginController::class, 'loginSup'])->name('loginSup');
Route::get('/showRegister', [SupervisorLoginController::class, 'showRegister'])->name('showRegister');
Route::post('/addSupervisor', [SupervisorLoginController::class, 'RegisterSup'])->name('addSupervisor');
Route::get('/supervisor/dashboard', [SupervisorLoginController::class, 'index'])->name('supervisor.dashboard');

Route::get('/getUser', [UserController::class, 'getUser'])->name('getUser');
Route::get('/add/user', [UserController::class, 'UserIndex'])->name('add/user');    
Route::post('/addUser', [UserController::class, 'addUser'])->name('users-insert');