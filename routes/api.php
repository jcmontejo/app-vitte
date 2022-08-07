<?php

use App\Http\Controllers\API\ApiController;
use App\Http\Controllers\API\AuthController;
use Illuminate\Support\Facades\Route;

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

Route::group([
    'prefix' => 'auth',
], function () {
    // Route::post('check', 'API\AuthController@checkTokenExpired');
    Route::post('login', [AuthController::class, 'login']);

    Route::group([
        ['middleware' => ['auth:api', 'cors']],
    ], function () {
        Route::get('logout', [AuthController::class, 'logout']);
        Route::get('user', [AuthController::class, 'user']);
    });
});

Route::group([
    'prefix' => 'aplication',
], function () {
    Route::group([
        ['middleware' => ['auth:api', 'cors']],
    ], function () {
        Route::get('plantas', [ApiController::class, 'getPlantas']);
    });
});
