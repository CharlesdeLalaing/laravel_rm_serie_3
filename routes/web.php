<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Header_logoController;
use App\Http\Controllers\HomeBackOfficeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\PortofolioGridController;
use App\Http\Controllers\ServiceController;
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

Route::get('/',[HomeController::class,'index']);



// BACK - OFFICE
Route::get('/home/administration', [HomeBackOfficeController::class,'index'])->name('homebo');

//CREATE
Route::get('/top/administration/create', [Header_logoController::class,'create']);
Route::get('/service/administration/create', [ServiceController::class,'create']);
Route::get('/portofolio-grid/administration/create', [PortofolioGridController::class,'create']);

//STORE
Route::post('/top/administration/store', [Header_logoController::class,'store']);
Route::post('/about/administration/store', [AboutController::class,'store']);
Route::post('/service/administration/store', [ServiceController::class,'store']);
Route::post('/portofolio/administration/store', [PortofolioController::class,'store']);
Route::post('/portofolio-grid/administration/store', [PortofolioGridController::class,'store']);
Route::post('/contact/administration/store', [ContactController::class,'store']);

//SHOW
Route::get('/top/administration/{id}/show',[Header_logoController::class,'show']);
Route::get('/about/administration/{id}/show',[AboutController::class,'show']);
Route::get('/service/administration/{id}/show',[ServiceController::class,'show']);
Route::get('/portofolio/administration/{id}/show',[PortofolioController::class,'show']);
Route::get('/portofolio-grid/administration/{id}/show',[PortofolioGridController::class,'show']);
Route::get('/contact/administration/{id}/show',[ContactController::class,'show']);



