<?php

use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\Plant\Catalogs\PlantController;
use App\Http\Controllers\TypeUser\Catalogs\TypeUserController;
use App\Http\Controllers\User\Catalogs\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    return view('welcome');
});
#Test routes
Route::get('demo', function () {
    return view('layouts.admin');
});
#Login routes
Route::get('dashboard', [CustomAuthController::class, 'dashboard']);
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

##TypeUser
Route::get('/type_user/type_user', [TypeUserController::class, 'index'])->name('type_user.index');
Route::post('/type_user/type_user', [TypeUserController::class, 'index']);

Route::get('/type_user/type_user/create', [TypeUserController::class, 'create']);
Route::post('/type_user/type_user/create', [TypeUserController::class, 'store']);

Route::put('/type_user/type_user/edit', [TypeUserController::class, 'update']);
Route::get('/type_user/type_user/{id}/edit', [TypeUserController::class, 'edit'])->name('type_user.edit');
Route::put('/type_user/type_user/{id}', [TypeUserController::class, 'destroy']);

##Plant
Route::get('/plant/plant', [PlantController::class, 'index'])->name('plant.index');
Route::post('/plant/plant', [PlantController::class, 'index']);

Route::get('/plant/plant/create', [PlantController::class, 'create']);
Route::post('/plant/plant/create', [PlantController::class, 'store']);

Route::put('/plant/plant/edit', [PlantController::class, 'update']);
Route::get('/plant/plant/{id}/edit/from/{from?}/to/{to?}', [PlantController::class, 'edit'])->name('plant.edit');
Route::put('/plant/plant/{id}', [PlantController::class, 'destroy']);

Route::get('/plant/plant/downloadQr/{id}', [PlantController::class, 'downloadQr']);

##User
Route::get('/user/user', [UserController::class, 'index'])->name('user.index');
Route::post('/user/user', [UserController::class, 'index']);

Route::get('/user/user/create', [UserController::class, 'create']);
Route::post('/user/user/create', [UserController::class, 'store']);

Route::put('/user/user/edit', [UserController::class, 'update']);
Route::get('/user/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::put('/user/user/{id}', [UserController::class, 'destroy']);
