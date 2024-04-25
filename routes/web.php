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

Route::get('/', [\App\Http\Controllers\LoginController::class, 'login'])->name('login');
Route::post('/login_proses', [\App\Http\Controllers\LoginController::class, 'login_proses'])->name('login-proses');

Route::get('/index', [\App\Http\Controllers\HomeController::class, 'index'])->name('index');
