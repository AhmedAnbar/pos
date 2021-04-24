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

Route::group(['middleware' => 'api', 'prefix' => 'auth'], function ($router) {
    Route::post('login', [\Modules\User\Http\Controllers\Auth\AuthController::class, 'login']);
    Route::post('logout', [\Modules\User\Http\Controllers\Auth\AuthController::class, 'logout']);
    Route::post('refresh', [\Modules\User\Http\Controllers\Auth\AuthController::class, 'refresh']);
    Route::post('me', [\Modules\User\Http\Controllers\Auth\AuthController::class, 'me']);
});
