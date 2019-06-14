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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::group(['middleware' => 'auth:api'], function () {

    Route::apiResource('tasks', 'API\TaskController');
});

Route::post('login', 'API\AuthController@login');
Route::post('register', 'API\AuthController@register');
Route::group(['middleware' => 'auth:api'], function () {
    Route::post('getUser', 'API\AuthController@getUser');
    Route::post('logout', 'API\AuthController@logout');
});

