<?php

namespace App\Http\Controllers;

use App\Models\laporan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index() : View
    {
        return view('index');
    }

    public function all() : View
    {
        //mengambil semua data dari tabel laporans
        $laporans = laporan::all();
        //mengirim data ke view all.blade.php
        return view('all', compact('laporans'));
    }

    public function selesai() : View
    {
        return view('selesai');
    }

    public function tolak() : View
    {
        return view('tolak');
    }
}
