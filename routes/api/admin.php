<?php

use App\Http\Controllers\admin\AdminAuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes For Admins Panel
|--------------------------------------------------------------------------
|
*/



Route::name('api.admin.')->middleware('throttle:api')->group( function(){

    Route::controller(AdminAuthController::Class)->group( function(){
        Route::post('/login', 'login')->name('login');
    });


});


//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});
