<?php

use App\Http\Controllers\admin\AdminProfileController;
use App\Http\Livewire\Admin\Auth\Login;
use App\Http\Livewire\Admin\Dashboard\Dashboard;
use App\Http\Livewire\Admin\Questions\CreateQuestions;
use App\Http\Livewire\Admin\Questions\ListQuestions;
use App\Http\Livewire\Admin\Questions\ShowQuestion;
use App\Http\Livewire\Admin\Roles\CreateRoles;
use App\Http\Livewire\Admin\Roles\ListRoles;
use App\Http\Livewire\Admin\Roles\ShowRole;
use App\Http\Livewire\Admin\Students\CreateStudents;
use App\Http\Livewire\Admin\Students\ListStudents;
use App\Http\Livewire\Admin\Students\ShowStudent;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminAuthController;
use App\Http\Controllers\admin\AdminRolesController;
use App\Http\Controllers\admin\AdminAccountsController;
use App\Http\Controllers\admin\AdminStudentsController;
use App\Http\Controllers\admin\AdminQuestionsController;
use App\Http\Controllers\admin\AdminCorrectionController;
use App\Http\Controllers\admin\AdminPermissionsController;

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
        Route::get('/show/{user}', ShowStudent::class)->name('show');
        Route::get('/delete/{user}', [AdminStudentsController::class, 'delete'])->name('delete');
    });

    // questions
    Route::name('question.')->prefix('question')->group(function () {
        Route::get('/', ListQuestions::class)->name('index');
        Route::get('/create', CreateQuestions::class)->name('create');
        Route::get('/show/{question}', ShowQuestion::class)->name('show');
        Route::get('/delete/{question}', [AdminQuestionsController::class, 'delete'])->name('delete');
    });

    // permissions
    Route::resource('permission', AdminPermissionsController::class)->except('edit', 'delete');


     // roles
    Route::name('role.')->prefix('role')->group(function () {
        Route::get('/', ListRoles::class)->name('index');
        Route::get('/create', CreateRoles::class)->name('create');
        Route::get('/show/{role}', ShowRole::class)->name('show');
        Route::get('/delete/{role}', [AdminRolesController::class, 'delete'])->name('delete');
//            Route::resource('role', AdminRoleController::class)->except('edit', 'delete');
    });


    // accounts
    Route::resource('admin', AdminAccountsController::class)->except('edit', 'delete');
    Route::name('admin.')->prefix('admin')->controller(AdminAccountsController::Class)->group(function () {
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
