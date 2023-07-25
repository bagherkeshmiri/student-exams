<?php

use App\Http\Controllers\admin\AdminProfileController;
use App\Http\Livewire\Admin\Auth\Login;
use App\Http\Livewire\Admin\Dashboard\Dashboard;
use App\Http\Livewire\Admin\Questions\CreateQuestion;
use App\Http\Livewire\Admin\Questions\ListQuestion;
use App\Http\Livewire\Admin\Questions\ShowQuestion;
use App\Http\Livewire\Admin\Students\CreateStudents;
use App\Http\Livewire\Admin\Students\ListStudents;
use App\Http\Livewire\Admin\Students\ShowStudents;
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
    Route::name('user.')->prefix('user')->group(function () {
        Route::get('/', ListStudents::class)->name('index');
        Route::get('/create', CreateStudents::class)->name('create');
        Route::get('/show/{user}', ShowStudents::class)->name('show');
        Route::get('/delete/{user}', [AdminStudentController::class, 'delete'])->name('delete');
    });

    // questions
    Route::name('question.')->prefix('question')->group(function () {
        Route::get('/', ListQuestion::class)->name('index');
        Route::get('/create', CreateQuestion::class)->name('create');
        Route::get('/show/{question}', ShowQuestion::class)->name('show');
        Route::get('/delete/{question}', [AdminQuestionController::class, 'delete'])->name('delete');
    });
//    Route::resource('question', AdminQuestionController::class)->except('edit', 'delete');

    // permissions
    Route::resource('permission', AdminPermissionController::class)->except('edit', 'delete');


    // roles
    Route::resource('role', AdminRoleController::class)->except('edit', 'delete');


    // accounts
    Route::resource('admin', AdminAccountController::class)->except('edit', 'delete');
    Route::name('admin.')->prefix('admin')->controller(AdminAccountController::Class)->group(function () {
        Route::get('/delete/{admin}', 'delete')->name('delete');
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
