<?php

namespace App\Http\Controllers;

use App\Models\laporan;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LengkapController extends Controller
{
    public function show($id): View
    {
        // Mengambil laporan berdasarkan ID
        $laporan = Laporan::findOrFail($id);

        // Mengirim data laporan ke view lengkap.blade.php
        return view('lengkap', compact('laporan'));
    }
}
