<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\reserveController;

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

Route::get('/',[ userController::class,'home']);

Route::get('/about',[userController::class,'about']);

Route::get('/contact',[contactController::class,'contact']);
Route::post('/contact',[contactController::class,'register']);

Route::get('/menu',[userController::class,'menu']);
Route::get('/gallery',[userController::class,'gallery']);

Route::get('/reservation',[reserveController::class,'reserve']);
Route::post('/reservation',[reserveController::class,'register']);