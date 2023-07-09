<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HouseController;

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

Route::get('/',[HouseController::class,'index'])->middleware('auth');
Route::get('/admin',[HouseController::class,'admin'])->middleware('auth');
Route::get('/filter',[HouseController::class,'filter'])->middleware('auth');

Route::get('/register',[UserController::class,'create']);
Route::post('/registration',[UserController::class,'store']);
Route::get('/login',[UserController::class,'login'])->name('login');
Route::post('/authenticate',[UserController::class,'authenticate']);

Route::post('/logout',[UserController::class,'logout']);
