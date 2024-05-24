<?php

    namespace App\Http\Controllers;

    use App\Http\Requests\LaporanRequest;
    use App\Models\laporan;
    use Illuminate\Http\Request;
    use Illuminate\View\View;
    use Illuminate\Support\Facades\Auth;
    use App\Models\Tanggapan;

    class AjukanController extends Controller
    {

        public function ajukan(): View
        {
            return view('ajukan');
        }

        public function LihatTanggapan(): View
        {

            // Mengambil tanggapan berdasarkan ID pengguna dan ID laporan
            $userTanggapans = Laporan::whereIn('status', ['approve', 'unapproved', 'pending'])
                ->with('tanggapans')
                ->get();

            return view('lihat_tanggapan', compact('userTanggapans'));
        }



        public function proses_pengaduan(LaporanRequest $request)
        {
            $validated = $request->validated();

            // Handle the file upload if a file is present
            if ($request->hasFile('foto')) {
                $file = $request->file('foto');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('foto'), $filename);
                $validated['foto'] = $filename; // Store only the filename
            }

            // Create the laporan entry with the validated data
            laporan::create($validated);

            // Redirect with a success message
            return redirect()->route('ajukan')->with('success', 'Pengaduan berhasil dikirim!');
        }
    }
