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
    //halaman masyarakat
    Route::get('/home', [\App\Http\Controllers\LoginuserController::class, 'home'])->name('home');
    Route::get('/loginuser', [\App\Http\Controllers\LoginuserController::class, 'loginuser'])->name('loginuser');
    Route::post('/login_user', [\App\Http\Controllers\LoginuserController::class, 'login_user'])->name('login_user');
    Route::get('/page1', [\App\Http\Controllers\LoginuserController::class, 'page1'])->name('page1');

    Route::get('/ajukan', [\App\Http\Controllers\AjukanController::class, 'ajukan'])->name('ajukan');
    Route::get('/lihat_tanggapan', [\App\Http\Controllers\AjukanController::class, 'LihatTanggapan'])->name('LihatTanggapan');
    Route::post('/proses_pengaduan', [\App\Http\Controllers\AjukanController::class, 'proses_pengaduan'])->name('proses_pengaduan');

    //halaman admin
    Route::get('/', [\App\Http\Controllers\LoginController::class, 'login'])->name('login')->middleware('guest');
    Route::post('/login_proses', [\App\Http\Controllers\LoginController::class, 'login_proses'])->name('login_proses');
    Route::post('/logout', [\App\Http\Controllers\LoginController::class, 'logout'])->name('logout');

    Route::get('/index', [\App\Http\Controllers\HomeController::class, 'index'])->name('index')->middleware('auth');
    Route::get('/all', [\App\Http\Controllers\HomeController::class, 'all'])->name('all');
    Route::get('/selesai', [\App\Http\Controllers\HomeController::class, 'selesai'])->name('selesai');
    Route::get('/tolak', [\App\Http\Controllers\HomeController::class, 'tolak'])->name('tolak');

    Route::get('/laporan/{id}', [\App\Http\Controllers\LengkapController::class, 'show'])->name('laporan.show');
    Route::get('/laporan/{id}/tanggapan', [\App\Http\Controllers\TanggapanController::class, 'buatTanggapan'])->name('laporan.tanggapan');
    Route::get('/laporan/{id}/tanggapantolak', [\App\Http\Controllers\TanggapanController::class, 'buatTanggapanTolak'])->name('laporan.tanggapantolak');
    Route::post('/laporan/{id}/tanggapan', [\App\Http\Controllers\TanggapanController::class, 'simpanTanggapan'])->name('laporan.simpanTanggapan');
    Route::post('/tanggapan/store', [\App\Http\Controllers\TanggapanController::class, 'store'])->name('tanggapan.store');
    Route::post('/tanggapan/storeTolak', [\App\Http\Controllers\TanggapanController::class, 'storeTolak'])->name('tanggapan.storeTolak');

    Route::get('/tanggapan/{id}', [\App\Http\Controllers\TanggapanController::class, 'buatTanggapan'])->name('tanggapan.buat');
    Route::get('/tanggapan/{id}', [\App\Http\Controllers\TanggapanController::class, 'buatTanggapan'])->name('tanggapan.buat');
    Route::post('/tanggapan/{id}', [\App\Http\Controllers\TanggapanController::class, 'simpanTanggapan'])->name('tanggapan.simpan');
