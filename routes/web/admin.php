<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminAuthController;
use App\Http\Controllers\admin\AdminRoleController;
use App\Http\Controllers\admin\AdminAccountController;
use App\Http\Controllers\admin\AdminStudentController;
use App\Http\Controllers\admin\AdminQuestionController;
use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\admin\AdminCorrectionController;
use App\Http\Controllers\admin\AdminPermissionController;

/*
|--------------------------------------------------------------------------
| Admins Web Routes
|--------------------------------------------------------------------------
|
*/


Route::name('admin.')->group( function(){


    // auth
    Route::controller(AdminAuthController::Class)->group( function(){
        Route::middleware('ValidAdmin')->get('/login', 'showLogin')->name('show-login');
        Route::post('/login', 'login')->name('login');
        Route::get('/logout', 'logout')->name('logout');
    });

});




Route::name('admin.')->middleware('InvalidAdmin')->group( function(){


    // dashboard
    Route::prefix('panel')->controller(AdminDashboardController::Class)->group( function(){
        Route::get('/dashboard', 'index')->name('dashboard');
    });


    // students
    Route::resource('user', AdminStudentController::class)->except('edit','destroy');
    Route::name('user.')->prefix('user')->controller(AdminStudentController::Class)->group( function(){
        Route::get('/destroy/{user}', 'destroy')->name('destroy');
    });


    // questions
    Route::resource('question', AdminQuestionController::class)->except('edit','destroy');
    Route::name('question.')->prefix('question')->controller(AdminQuestionController::Class)->group( function(){
        Route::get('/destroy/{question}', 'destroy')->name('destroy');
    });


    // permissions
    Route::resource('permission', AdminPermissionController::class)->except('edit','destroy');


    // roles
    Route::resource('role', AdminRoleController::class)->except('edit','destroy');


    // accounts
    Route::resource('admin', AdminAccountController::class)->except('edit','destroy');
    Route::name('admin.')->prefix('admin')->controller(AdminAccountController::Class)->group( function(){
        Route::get('/destroy/{admin}', 'destroy')->name('destroy');
    });


    // correction
    // Route::resource('correction', AdminCorrectionController::class)->except('edit','destroy','create');

    Route::name('correction.')->prefix('correction')->controller(AdminCorrectionController::Class)->group( function(){
        Route::get('/', 'index')->name('index');
        Route::get('/show/{question}', 'show')->name('show');
        Route::post('/store/{question}', 'store')->name('store');
    });

});
