<?php

    namespace App\Http\Controllers;

    use App\Models\Laporan;
    use App\Models\Tanggapan;
    use Illuminate\Http\Request;
    use Illuminate\View\View;

    class TanggapanController extends Controller
    {
        public function buatTanggapan($id)
        {
            // Ambil laporan berdasarkan ID
            $laporan = Laporan::findOrFail($id);

            // Tampilkan view formulir tanggapan
            return view('tanggapan', compact('laporan'));
        }
        public function buatTanggapanTolak($id)
        {
            // Ambil laporan berdasarkan ID
            $laporan = Laporan::findOrFail($id);

            // Tampilkan view formulir tanggapan
            return view('tanggapantolak', compact('laporan'));
        }

        public function store(Request $request)
        {
            // Validate request
            $request->validate([
                'tanggapan' => 'required|string',
                'laporan_id' => 'required|integer|exists:laporans,id', // Additional validation for laporan_id
            ]);

            // Store tanggapan
            $tanggapan = Tanggapan::create([
                'tanggapan' => $request->tanggapan,
                'laporan_id' => $request->laporan_id,
            ]);

            // Update laporan status (optional, depending on your logic)
            $laporan = Laporan::find($request->laporan_id);
            if ($laporan) {
                $laporan->status = 'approve'; // Or your desired status
                $laporan->save();
            }

            // Redirect or send response
            return redirect()->route('laporan.show', $request->laporan_id)->with('success', 'Tanggapan berhasil disimpan!');
        }

        public function storeTolak(Request $request)
        {
            // Validate request
            $request->validate([
                'tanggapan' => 'required|string',
                'laporan_id' => 'required|integer|exists:laporans,id',
            ]);

            // Store tanggapan
            $tanggapan = Tanggapan::create([
                'tanggapan' => $request->tanggapan,
                'laporan_id' => $request->laporan_id,
            ]);

            // Update laporan status
            $laporan = Laporan::find($request->laporan_id);
            if ($laporan) {
                $laporan->status = 'unapproved'; // Or your desired status
                $laporan->save();
            }

            // Redirect or send response
            return redirect()->route('laporan.show', $request->laporan_id)->with('success', 'Tanggapan berhasil disimpan!');
        }
    }
