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
        Route::post('plantas/', [ApiController::class, 'getPlanta']);
        Route::post('plantas/guardar/bombapozo', [ApiController::class, 'storeBombaPozo']);
        Route::post('plantas/guardar/oxidacion', [ApiController::class, 'storeOxidacionCloro']);
        Route::post('plantas/guardar/decloracion', [ApiController::class, 'storeDecloracion']);
        Route::post('plantas/guardar/filtracion', [ApiController::class, 'storeFiltracion']);
        Route::post('plantas/guardar/osmosis', [ApiController::class, 'storeOsmosis']);
        Route::post('plantas/guardar/decinfeccion', [ApiController::class, 'storeDesinfeccion']);
        Route::post('plantas/guardar/decinfeccionOxidacion', [ApiController::class, 'storeOxidacionDesinfeccion']);
        Route::post('plantas/guardar/mezcladorEstatico', [ApiController::class, 'storeMezcladorEstatico']);
        Route::post('plantas/guardar/hipocloritoConSensor', [ApiController::class, 'storeHipocloritoConSensor']);
        Route::post('plantas/guardar/carcamoBombeo', [ApiController::class, 'storeCarcamoBombeo']);
        Route::post('plantas/guardar/sedimentador', [ApiController::class, 'storeSedimentador']);

        // Points
        Route::get('user-points', [ApiController::class, 'getUserPoints']);
        Route::post('evidence', [ApiController::class, 'storeEvidence']);


        Route::post('plantas/guardar/incidencia', [ApiController::class, 'storeIncidencia']);
    });
});
