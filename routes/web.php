<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// auth route for both
Route::group(['middleware'=> ['auth']], function(){
    // Route::get('/dashboard',[App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

// for users
Route::group(['middleware'=> ['auth','role:user']], function(){
    // Route::get('/dashboard',[App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/myprofile', [DashboardController::class, 'myprofile'])->name('dashboardMyprofile');
});

// for blog writer
Route::group(['middleware'=> ['auth','role:blogwriter']], function(){
    // Route::get('/dashboard',[App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/postCreate', [DashboardController::class, 'postCreate'])->name('dashboardPostCreate');
});

// for admin
Route::group(['middleware'=> ['auth','role:admin']], function(){
    // Route::get('/dashboard',[App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/dashboardAdmin', [DashboardController::class, 'admin'])->name('dashboardAdmin');
});

require __DIR__.'/auth.php';
