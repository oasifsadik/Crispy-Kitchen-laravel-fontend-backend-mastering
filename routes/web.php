<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Fontend\FontendController;
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
//Fontend

Route::get('/',[FontendController::class,'index'])->name('fontend.home');
Route::get('/about',[FontendController::class,'about'])->name('fontend.about');
Route::get('/menu',[FontendController::class,'menu'])->name('fontend.menu');
Route::get('/news',[FontendController::class,'news'])->name('fontend.news');
Route::get('/contact',[FontendController::class,'contact'])->name('fontend.contact');

// Backend

Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
