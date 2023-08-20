<?php

use Illuminate\Support\Facades\Auth;

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

// $val = 5;

// if($val == 3){
    
// } else{
// }

// dd(Auth::user());

Route::get('/admin',[HouseController::class,'admin'])->name('admin');
// ->middleware('auth');
Route::get('/',[HouseController::class,'index'])->name('home')
 ->middleware('auth');
Route::get('/filter',[HouseController::class,'filter']);
// ->middleware('auth');

Route::get('/adduser',[UserController::class,'addemployeeview']);
Route::post('/adduser',[UserController::class,'addemployee']);

Route::get('/admin/designation',[UserController::class,'designationview']);
Route::get('/admin/adddesignation',[UserController::class,'adddesignation']);
Route::post('/admin/adddesignation',[UserController::class,'adddesignationpost']);


Route::get('/admin/addarea',[UserController::class,'addarea']);
Route::get('/admin/area',[UserController::class,'areaview']);
Route::post('/admin/addnewarea',[UserController::class,'addnewarea']);

Route::get('/admin/office',[UserController::class,'officeview']);
Route::get('/admin/addoffice',[UserController::class,'addoffice']);
Route::post('/admin/addoffice',[UserController::class,'addnewoffice']);



Route::get('/register',[UserController::class,'create']);
Route::post('/registration',[UserController::class,'store']);
Route::get('/login',[UserController::class,'login'])->name('login');
Route::post('/authenticate',[UserController::class,'authenticate']);



Route::post('/logout',[UserController::class,'logout']);
