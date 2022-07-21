<?php

use App\Http\Controllers\admin\AdminAuthController;
use App\Http\Controllers\admin\AdminDashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admins Web Routes
|--------------------------------------------------------------------------
|
*/

Route::name('admin.')->group( function(){

    Route::prefix('panel')->middleware('InvalidAdmin')->controller(AdminDashboardController::Class)->group( function(){
        Route::get('/dashboard', 'index')->name('dashboard');
    });

    Route::controller(AdminAuthController::Class)->group( function(){
        Route::middleware('ValidAdmin')->get('/login', 'showLogin')->name('show-login');
        Route::post('/login', 'login')->name('login');
        Route::get('/logout', 'logout')->name('logout');
    });


});
