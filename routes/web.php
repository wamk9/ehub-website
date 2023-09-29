<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\Site;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::controller(Site\HomeController::class)->group(function(){
    Route::get('/','index');
});




Route::middleware('auth')->group(function() {
    Route::get('admin/dashboard', [Admin\Dashboard\DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('admin/config', [Admin\Dashboard\DashboardController::class, 'index'])->name('admin.config');
    Route::get('admin/logout', [Admin\Auth\LoginController::class, 'logout'])->name('admin.logout');
});

Route::middleware('guest')->group(function() {
    Route::controller(Admin\Auth\LoginController::class)->group(function(){
        Route::get('/admin','index')->name('login.page');
        Route::post('/admin/login','login')->name('login');
    });
});

