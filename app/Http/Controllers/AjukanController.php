<?php

namespace App\Http\Controllers;

use App\Http\Requests\LaporanRequest;
use App\Models\laporan;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AjukanController extends Controller
{

    public function ajukan() : View
    {
        return view('ajukan');
    }

    public function proses_pengaduan(LaporanRequest $request)
    {
        $post = $request->only(['nama', 'alamat', 'tanggal_kejadian', 'kategori', 'foto', 'laporan']);

        $foto = time() . '.' . $request->foto->extension();
        $request->foto->move(public_path('foto'), $foto);
//
//        if ($request->hasFile('foto')) {
//            $file = $request->file('foto');
//            $filePath = $file->store('gambar', 'public');
//            $post['foto'] = $filePath;
//        }

        laporan::create($post);

        // Redirect or return response
        return redirect()->route('ajukan')->with('success', 'Pengaduan berhasil dikirim!');
    }
}
