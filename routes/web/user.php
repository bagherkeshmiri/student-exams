<?php

use App\Http\Controllers\user\UserAuthController;
use App\Http\Controllers\user\UserDashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Users Web Routes
|--------------------------------------------------------------------------
|
*/


Route::name('user.')->group( function(){

    Route::prefix('panel')->controller(UserDashboardController::Class)->group( function(){
        Route::get('/dashboard', 'index')->name('dashboard');
    });

    Route::controller(UserAuthController::Class)->group( function(){
        Route::get('/login', 'showLogin')->name('show-login');
        Route::get('/register', 'showRegister')->name('show-register');
//        Route::post('/login', 'login')->name('login');
//        Route::post('/register', 'register')->name('register');
    });


});



