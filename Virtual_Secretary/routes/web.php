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

Route::get('/',[App\Http\Controllers\webAppController::class, 'index']);


Auth::routes();


Route::resource('/services', App\Http\Controllers\ServiceController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
