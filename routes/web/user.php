<?php

use App\Http\Controllers\user\UserAnswerController;
use App\Http\Controllers\user\UserAuthController;
use App\Http\Controllers\user\UserDashboardController;
use App\Http\Controllers\user\UserProfileController;
use App\Http\Controllers\user\UserProtestController;
use App\Http\Controllers\user\UserQuestionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Users Web Routes
|--------------------------------------------------------------------------
*/


Route::name('user.')->group( function(){

    // auth
    Route::controller(UserAuthController::Class)->group( function(){
        Route::middleware('ValidUser')->get('/login', 'showLogin')->name('show-login');
        Route::get('/register', 'showRegister')->name('show-register');
        Route::post('/login', 'login')->name('login');
        Route::get('/logout', 'logout')->name('logout');
    });

});


Route::name('user.')->prefix('panel')->middleware('InvalidUser')->group( function(){

    // dashboard
    Route::controller(UserDashboardController::Class)->group( function(){
        Route::get('/dashboard', 'index')->name('dashboard');
    });

    // questions
    Route::resource('question', UserQuestionController::class)->only('show','index');


    // answer
    Route::name('answer.')->prefix('answer')->controller(UserAnswerController::Class)->group( function(){
        Route::post('/store/{question}', 'store')->name('store');
    });


    // protest
    Route::name('protest.')->prefix('protest')->controller(UserProtestController::Class)->group( function(){
        Route::post('/store/{question}', 'store')->name('store');
    });



    // profile
    Route::name('profile.')->prefix('profile')->controller(UserProfileController::Class)->group( function(){
        Route::get('/', 'index')->name('index');
        Route::post('/', 'changePassword')->name('changePassword');
    });
});


