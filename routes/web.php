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
use App\Http\Controllers\UserController;



Route::get('/', [UserController::class,'index']);
Route::get('add', [UserController::class,'add']);
Route::post('store',[UserController::class,'store']);
Route::get('edit/{id}',[UserController::class,'edit']);
Route::post('update',[UserController::class,'update']);
Route::get('delete/{id}',[UserController::class,'delete']);

