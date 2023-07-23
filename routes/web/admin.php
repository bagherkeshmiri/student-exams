<?php

use App\Http\Controllers\admin\AdminProfileController;
use App\Http\Livewire\Admin\Auth\Login;
use App\Http\Livewire\Admin\Dashboard\Dashboard;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminAuthController;
use App\Http\Controllers\admin\AdminRoleController;
use App\Http\Controllers\admin\AdminAccountController;
use App\Http\Controllers\admin\AdminStudentController;
use App\Http\Controllers\admin\AdminQuestionController;
use App\Http\Controllers\admin\AdminCorrectionController;
use App\Http\Controllers\admin\AdminPermissionController;

/*
|--------------------------------------------------------------------------
| Admins Web Routes
|--------------------------------------------------------------------------
*/


Route::name('admin.')->group(function () {
    Route::controller(AdminAuthController::Class)->group(function () {
        Route::get('/logout', 'logout')->name('logout');
    });
});


Route::name('admin.panel.')->prefix('panel')->group(function () {
    // auth
    Route::get('login', Login::class)->name('show-login');

    // dashboard
    Route::get('dashboard', Dashboard::class)->name('dashboard');

    // students
    Route::resource('user', AdminStudentController::class)->except('edit', 'destroy');
    Route::name('user.')->prefix('user')->controller(AdminStudentController::Class)->group(function () {
        Route::get('/destroy/{user}', 'destroy')->name('destroy');
    });


    // questions
    Route::resource('question', AdminQuestionController::class)->except('edit', 'destroy');
    Route::name('question.')->prefix('question')->controller(AdminQuestionController::Class)->group(function () {
        Route::get('/destroy/{question}', 'destroy')->name('destroy');
    });


    // permissions
    Route::resource('permission', AdminPermissionController::class)->except('edit', 'destroy');


    // roles
    Route::resource('role', AdminRoleController::class)->except('edit', 'destroy');


    // accounts
    Route::resource('admin', AdminAccountController::class)->except('edit', 'destroy');
    Route::name('admin.')->prefix('admin')->controller(AdminAccountController::Class)->group(function () {
        Route::get('/destroy/{admin}', 'destroy')->name('destroy');
    });


    // correction
    Route::name('correction.')->prefix('correction')->controller(AdminCorrectionController::Class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/show/{question}', 'show')->name('show');
        Route::post('/store/{question}', 'store')->name('store');
    });


    // profile
    Route::name('profile.')->prefix('profile')->controller(AdminProfileController::Class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/', 'changePassword')->name('changePassword');
    });
});
