<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['prefix' => 'user'], function () {
    Route::post('login', 'AuthController@login');
});

Route::group(['middleware' => ['auth:api']],function(){
    Route::get('/user-id','TestController@test');
});

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
//
