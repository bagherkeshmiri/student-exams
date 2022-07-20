<?php


use App\Http\Controllers\api\v1\admin\AdminAuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes For Admins Panel
|--------------------------------------------------------------------------
|
*/



Route::name('api.admin.')->group( function(){

//    Route::controller(AdminAuthController::Class)->group( function(){
//        Route::post('/login', 'login')->name('login');
//    });


});


//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});
