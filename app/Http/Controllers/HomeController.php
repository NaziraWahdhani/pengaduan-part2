<?php

    namespace App\Http\Controllers;

    use App\Models\laporan;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\View\View;

    class HomeController extends Controller
    {
        public function index(): View
        {
            // Fetch data from the "laporans" table
            $kategoriData = Laporan::pluck('kategori')->toArray();

            $kategoriCounts = array_count_values($kategoriData);

            // Define data array for the chart
            $chartData = [
                isset($kategoriCounts['gangguan_lingkungan']) ? $kategoriCounts['gangguan_lingkungan'] : 0,
                isset($kategoriCounts['bantuan_sosial']) ? $kategoriCounts['bantuan_sosial'] : 0,
                isset($kategoriCounts['kerusakan_lingkungan']) ? $kategoriCounts['kerusakan_lingkungan'] : 0
            ];

            return view('index', compact('kategoriData', 'chartData'));
        }

        public function all(): View
        {
            //mengambil semua data dari tabel laporans
            $laporans = laporan::all();
            //mengirim data ke view all.blade.php
            return view('all', compact('laporans'));
        }

        public function selesai(): View
        {
            // Fetch only approved laporans
            $laporans = Laporan::where('status', 'approve')->with('tanggapans')->get();

            // Send data to the view
            return view('selesai', compact('laporans'));
        }

        public function tolak(): View
        {
            // Fetch only approved laporans
            $laporans = Laporan::where('status', 'unapproved')->with('tanggapans')->get();

            // Send data to the view
            return view('tolak', compact('laporans'));
        }
    }
