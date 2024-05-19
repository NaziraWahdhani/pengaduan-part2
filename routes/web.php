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

Route::get('/', [\App\Http\Controllers\LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login_proses', [\App\Http\Controllers\LoginController::class, 'login_proses'])->name('login_proses');
Route::post('/logout', [\App\Http\Controllers\LoginController::class, 'logout'])->name('logout');

Route::get('/index', [\App\Http\Controllers\HomeController::class, 'index'])->name('index')->middleware('auth');
Route::get('/all', [\App\Http\Controllers\HomeController::class, 'all'])->name('all');
Route::post('/laporan', [\App\Http\Controllers\PostController::class, 'laporan'])->name('laporan');
Route::get('/selesai', [\App\Http\Controllers\HomeController::class, 'selesai'])->name('selesai');
Route::get('/tolak', [\App\Http\Controllers\HomeController::class, 'tolak'])->name('tolak');
