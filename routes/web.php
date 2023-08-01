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

Route::get("data-hospitals",[HospitalsController::class,'index']);
Route::get("hospital/{id}/edit",[HospitalsController::class,'index']);
Route::get("hospital-delete/{id}",[HospitalsController::class,'delete']);
Route::post("hospital-store",[HospitalsController::class,'store']);
Route::put("hospital-update/{id}",[HospitalsController::class,'update']);

Route::get("data-users",[UsersController::class,'index']);
Route::get("users/{id}/edit",[UserController::class,'index']);
Route::get("users-delete/{id}",[UsersController::class,'delete']);
Route::post("users-store",[UsersController::class,'store']);
Route::put("users-update/{id}",[UsersController::class,'update']);

Route::get("data-vehicles",[VehiclesController::class,'index']);
Route::get("vehicles/{id}/edit",[VehiclesController::class,'index']);
Route::get("vehicles-delete/{id}",[VehiclesController::class,'delete']);
Route::post("vehicles-store",[VehiclesController::class,'store']);
Route::put("vehicles-update/{id}",[VehiclesController::class,'update']);

Route::get("data-h_drivers",[h_driverscontroller::class,'index']);
Route::get("h_drivers/{id}/edit",[h_driverscontroller::class,'index']);
Route::get("h_drivers-delete/{id}",[h_driverscontroller::class,'delete']);
Route::post("h_drivers-store",[h_drivers::class,'store']);
Route::put("h_drivers-update/{id}",[h_driverscontroller::class,'update']);

Route::get("data-h_drivers",[h_transferscontroller::class,'index']);
Route::get("h_drivers/{id}/edit",[h_transferscontroller::class,'index']);
Route::get("h_drivers-delete/{id}",[h_transferscontroller::class,'delete']);
Route::post("h_drivers-store",[h_transferscontroller::class,'store']);
Route::put("h_drivers-update/{id}",[h_transferscpntroller::class,'update']);

Route::get("data-h_drivers",[pantientscontroller::class,'index']);
Route::get("h_drivers/{id}/edit",[pantientscontroller::class,'index']);
Route::get("h_drivers-delete/{id}",[pantientscontroller::class,'delete']);
Route::post("h_drivers-store",[pantientscontroller::class,'store']);
Route::put("h_drivers-update/{id}",[pantientscontroller::class,'update']);

