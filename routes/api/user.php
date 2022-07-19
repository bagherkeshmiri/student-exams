<?php

use App\Http\Controllers\user\UserAuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes For Users Panel
|--------------------------------------------------------------------------
|
*/


        Route::name('api.user.')->middleware('throttle:api')->group( function(){

            Route::controller(UserAuthController::Class)->group( function(){
                Route::post('/login', 'login')->name('login');
                Route::post('/register', 'register')->name('register');
            });


        });

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});
