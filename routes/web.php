<?php

use App\Http\Controllers\about\about\AboutController;
use App\Http\Controllers\contact\contact\ContactController;
use App\Http\Controllers\home\home\HomeController;
use App\Http\Controllers\menu\menu\MenuController;
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



Route::get('/', [HomeController::class, 'index'] )->name('home.index');

Route::get('/menu-agape', [MenuController::class , 'index'])->name('menu.index');

Route::get('/acerca-de-nostros', [AboutController::class , 'index'])->name('about.index');

Route::get('/contacta-agape', [ContactController::class , 'index'])->name('contact.index');