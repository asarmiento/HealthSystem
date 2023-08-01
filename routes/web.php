<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\UsersController;
use App\Http\Controllers\VehiclesController;
use App\Http\Controllers\HospitalsController;
use App\Http\Controllers\HTransfersController;
use App\Http\Controllers\PantientsController;
use App\Http\Controllers\HDriversController;

Route::get("data-hospitals",[HospitalsController::class,'index']);
Route::get("hospital/{id}/edit",[HospitalsController::class,'index']);
Route::get("hospital-delete/{id}",[HospitalsController::class,'delete']);
Route::post("hospital-store",[HospitalsController::class,'store']);
Route::put("hospital-update/{id}",[HospitalsController::class,'update']);

Route::get("data-users",[UsersController::class,'index']);
Route::get("users/{id}/edit",[UsersController::class,'index']);
Route::get("users-delete/{id}",[UsersController::class,'delete']);
Route::post("users-store",[UsersController::class,'store']);
Route::put("users-update/{id}",[UsersController::class,'update']);

Route::get("data-vehicles",[VehiclesController::class,'index']);
Route::get("vehicles/{id}/edit",[VehiclesController::class,'index']);
Route::get("vehicles-delete/{id}",[VehiclesController::class,'delete']);
Route::post("vehicles-store",[VehiclesController::class,'store']);
Route::put("vehicles-update/{id}",[VehiclesController::class,'update']);

Route::get("data-h_drivers",[HDriversController::class,'index']);
Route::get("h_drivers/{id}/edit",[HDriversController::class,'index']);
Route::get("h_drivers-delete/{id}",[HDriversController::class,'delete']);
Route::post("h_drivers-store",[HDriversController::class,'store']);
Route::put("h_drivers-update/{id}",[HDriversController::class,'update']);

Route::get("data-h_drivers",[HTransfersController::class,'index']);
Route::get("h_drivers/{id}/edit",[HTransfersController::class,'index']);
Route::get("h_drivers-delete/{id}",[HTransfersController::class,'delete']);
Route::post("h_drivers-store",[HTransfersController::class,'store']);
Route::put("h_drivers-update/{id}",[HTransfersController::class,'update']);

Route::get("data-h_drivers",[PantientsController::class,'index']);
Route::get("h_drivers/{id}/edit",[PantientsController::class,'index']);
Route::get("h_drivers-delete/{id}",[PantientsController::class,'delete']);
Route::post("h_drivers-store",[PantientsController::class,'store']);
Route::put("h_drivers-update/{id}",[PantientsController::class,'update']);

