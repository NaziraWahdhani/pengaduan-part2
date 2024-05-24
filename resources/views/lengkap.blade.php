<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset(asset('assets/css/style.css')) }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    spacing: {
                        13: '3.25rem',
                    },
                }
            }
        }
    </script>
    <title>Home</title>
    <style>
        body {
            .complaint-section {
                width: 150px;
                height: 150px;
                text-align: center;
                font-family: 'Poppins', sans-serif;
            }
        }

        .gambar {
            margin-right: 20px;
            /* Jarak antara gambar dan teks */
        }
    </style>
</head>

<body class="dark:bg-slate-800 dark:text-slate-200">
<nav>
    <ul class="bg-[#4ACAA4] py-4 flex justify-between items-center">
        <h1 class="text-2xl font-bold ml-8 text-white">Pengaduan Masyarakat Boyolangu</h1>
        <div class="flex items-center space-x-4 mr-8 text-white font-semibold">
            <li><a href="{{ route('index') }}">Home</a></li>
            <li><a href="admin.blade.php">Admin</a></li>
            <img src="{{ asset('assets/img/profile.svg') }}">
        </div>
        </div>
    </ul>
</nav>

<h1 class="font-bold ml-8 text-2xl p-6 text-center">LAPORAN LENGKAP</h1>

<div class="container mx-auto">
    <div class="border rounded-lg shadow-xl p-10">
        <div class="gambar">
            <!-- Tampilkan gambar jika ada -->
            @if($laporan->foto)
                <img src="{{ asset('foto/' . $laporan->foto) }}" alt="foto" width="200">
                <!-- Tampilkan isi laporan -->
                <p>{{ $laporan->laporan }}</p>
            @endif
        </div>
    </div>
</div>
<div class="font-medium text-white flex pt-4 justify-center">
    <button class="bg-[#4ACAA4] rounded-md mx-1 w-24 h-10"><a href="{{ route('laporan.tanggapan', $laporan->id) }}">Approve</a></button>
    <button class="bg-red-500 rounded-md mx-1 w-28 h-10"><a href="{{ route('laporan.tanggapantolak', $laporan->id) }}">Unapproved</a></button>
    <button class="bg-[#4ACAA4] rounded-md mx-1 w-24 h-10"><a href="{{ route('all') }}">Back</a></button>
</div>
