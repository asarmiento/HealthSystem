<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Http\Request;
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

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register', [RegisteredUserController::class, 'store'])
    ->middleware('guest')
    ->name('register');
Route::post('/login', [LoginController::class, 'loginAPIWeb'])
    ->middleware('guest')
    ->name('login');


use App\Http\Controllers\UsersController;
use App\Http\Controllers\VehiclesController;
use App\Http\Controllers\HospitalsController;
use App\Http\Controllers\HTransfersController;
use App\Http\Controllers\PantientsController;
use App\Http\Controllers\HDriversController;

Route::get("data-hospitals",[HospitalsController::class,'listsHospital']); // Lista de Hospitales
Route::get("hospital/{id}/edit",[HospitalsController::class,'index']); // Editar hospitales
Route::get("hospital-delete/{id}",[HospitalsController::class,'delete']); // eliminar hospitales
Route::post("hospital-store",[HospitalsController::class,'store']); // guardar hospitales
Route::put("hospital-update/{id}",[HospitalsController::class,'update']); // actualizar hospitales

Route::get("data-users",[UsersController::class,'listUsers']);
Route::get("users/{id}/edit",[UsersController::class,'edit']);
Route::get("users-delete/{id}",[UsersController::class,'delete']);
Route::post("users-store",[UsersController::class,'store']);
Route::put("users-update/{id}",[UsersController::class,'update']);

Route::get("data-vehicles",[VehiclesController::class,'listVehicles']);
Route::get("vehicles/{id}/edit",[VehiclesController::class,'edit']);
Route::get("vehicles-delete/{id}",[VehiclesController::class,'delete']);
Route::post("vehicles-store",[VehiclesController::class,'store']);
Route::put("vehicles-update/{id}",[VehiclesController::class,'update']);

Route::get("data-h-drivers",[HDriversController::class,'listDrivers']);
Route::get("h-drivers/{id}/edit",[HDriversController::class,'edit']);
Route::get("h-drivers-delete/{id}",[HDriversController::class,'destroy']);
Route::post("h-drivers-store",[HDriversController::class,'store']);
Route::put("h-drivers-update/{id}",[HDriversController::class,'update']);

Route::get("data-h-transfers",[HTransfersController::class,'listHTransfer']);
Route::get("h-transfers/{id}/edit",[HTransfersController::class,'edit']);
Route::get("h-transfers-delete/{id}",[HTransfersController::class,'destroy']);
Route::post("h-transfers-store",[HTransfersController::class,'store']);
Route::put("h-transfers-update/{id}",[HTransfersController::class,'update']);

Route::get("data-Pantients",[PantientsController::class,'inlistPantients']);
Route::get("Pantients/{id}/edit",[PantientsController::class,'edit']);
Route::get("Pantients-delete/{id}",[PantientsController::class,'destroy']);
Route::post("Pantients-store",[PantientsController::class,'store']);
Route::put("Pantients-update/{id}",[PantientsController::class,'update']);

