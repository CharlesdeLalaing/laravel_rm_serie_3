<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\Header_logoController;
use App\Http\Controllers\HomeBackOfficeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NavbarController;
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
Route::post('/navbar/administration/store', [NavbarController::class,'store']);
Route::post('/footer/administration/store', [FooterController::class,'store']);
Route::post('/about/administration/store', [AboutController::class,'store']);
Route::post('/service/administration/store', [ServiceController::class,'store']);
Route::post('/portofolio/administration/store', [PortofolioController::class,'store']);
Route::post('/portofolio-grid/administration/store', [PortofolioGridController::class,'store']);
Route::post('/contact/administration/store', [ContactController::class,'store']);

//SHOW
Route::get('/top/administration/{id}/show',[Header_logoController::class,'show']);
Route::get('/navbar/administration/{id}/show',[NavbarController::class,'show']);
Route::get('/footer/administration/{id}/show', [FooterController::class,'show']);
Route::get('/about/administration/{id}/show',[AboutController::class,'show']);
Route::get('/service/administration/{id}/show',[ServiceController::class,'show']);
Route::get('/portofolio/administration/{id}/show',[PortofolioController::class,'show']);
Route::get('/portofolio-grid/administration/{id}/show',[PortofolioGridController::class,'show']);
Route::get('/contact/administration/{id}/show',[ContactController::class,'show']);

//EDIT
Route::get('/top/administration/{id}/edit',[Header_logoController::class,'edit']);
Route::get('/navbar/administration/{id}/edit',[NavbarController::class,'edit']);
Route::get('/footer/administration/{id}/edit', [FooterController::class,'edit']);
Route::get('/about/administration/{id}/edit',[AboutController::class,'edit']);
Route::get('/service/administration/{id}/edit',[ServiceController::class,'edit']);
Route::get('/portofolio/administration/{id}/edit',[PortofolioController::class,'edit']);
Route::get('/portofolio-grid/administration/{id}/edit',[PortofolioGridController::class,'edit']);
Route::get('/contact/administration/{id}/edit',[ContactController::class,'edit']);


//UPDATE
Route::put('/top/administration/{id}/update',[Header_logoController::class,'update']);
Route::put('/navbar/administration/{id}/update',[NavbarController::class,'update']);
Route::put('/footer/administration/{id}/update',[FooterController::class,'update']);
Route::put('/about/administration/{id}/update',[AboutController::class,'update']);
Route::put('/service/administration/{id}/update',[ServiceController::class,'update']);
Route::put('/portofolio/administration/{id}/update',[PortofolioController::class,'update']);
Route::put('/portofolio-grid/administration/{id}/update',[PortofolioGridController::class,'update']);
Route::put('/contact/administration/{id}/update',[ContactController::class,'update']);


//DELETE
Route::delete('/top/administration/{id}/destroy',[Header_logoController::class,'destroy']);
Route::delete('/navbar/administration/{id}/destroy',[NavbarController::class,'destroy']);
Route::delete('/footer/administration/{id}/destroy',[FooterController::class,'destroy']);
Route::delete('/about/administration/{id}/destroy',[AboutController::class,'destroy']);
Route::delete('/service/administration/{id}/destroy',[ServiceController::class,'destroy']);
Route::delete('/portofolio/administration/{id}/destroy',[PortofolioController::class,'destroy']);
Route::delete('/portofolio-grid/administration/{id}/destroy',[PortofolioGridController::class,'destroy']);
Route::delete('/contact/administration/{id}/destroy',[ContactController::class,'destroy']);





