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


Route::get("data-hospitals",[HospitalsController::class,'index']);
Route::get("hospital/{id}/edit",[HospitalsController::class,'index']);
Route::get("hospital-delete/{id}",[HospitalsController::class,'delete']);
Route::post("hospital-store",[HospitalsController::class,'store']);
Route::put("hospital-update/{id}",[HospitalsController::class,'update']);

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