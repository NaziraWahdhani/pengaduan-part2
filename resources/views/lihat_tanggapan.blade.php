<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
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
            font-family: 'Poppins', sans-serif;
        }

        .complaint-section {
            width: 150px;
            height: 150px;
            text-align: center;
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="dark:bg-slate-800 dark:text-slate-200">
<h1 class="font-bold ml-8 text-2xl p-6 text-center">Semua Tanggapan</h1>
<div class="container mx-auto p-6">
    <table class="w-full table-fixed">
        <thead>
        <tr class="bg-[#4ACAA4] text-white">
            <th class="p-2">NO</th>
            <th class="p-2">NAMA</th>
            <th class="p-2">ALAMAT</th>
            <th class="p-2">KATEGORI</th>
            <th class="p-2">FOTO</th>
            <th class="p-2">TANGGAL KEJADIAN</th>
            <th class="p-2">ISI LAPORAN</th>
            <th class="p-2">TANGGAPAN</th>
            <th class="p-2">ACTION</th>
        </tr>
        </thead>
        <tbody>
        @foreach($userTanggapans as $laporan)
            <tr>
                <td class="p-2">{{ $loop->iteration }}</td>
                <td class="p-2">{{ $laporan->nama }}</td>
                <td class="p-2">{{ $laporan->alamat }}</td>
                <td class="p-2">{{ $laporan->kategori }}</td>
                <td class="p-2">
                    @if ($laporan->foto)
                        <img src="{{ asset('foto/' . $laporan->foto) }}" alt="foto" class="w-20 h-20 object-cover mx-auto">
                    @else
                        Tidak ada foto
                    @endif
                </td>
                <td class="p-2">{{ $laporan->tanggal_kejadian }}</td>
                <td class="p-2">{{ $laporan->laporan }}</td>
                @if ($laporan->tanggapans->isNotEmpty())
                    <td>{{ $laporan->tanggapans->first()->tanggapan }}</td>
                @else
                    <td>No Tanggapan</td>
                @endif
                <td class="p-2">
                    @if ($laporan->status === 'pending')
                        <a class="bg-[#4ACAA4] text-white px-2 py-1 rounded-md flex items-center justify-center">
                            Belum Ditanggapi
                        </a>
                    @endif

                    <span class="
        @switch($laporan->status)
            @case('approve')
                bg-green-500
                @break
            @case('unapproved')
                bg-red-500
                @break
        @endswitch
        text-white px-2 py-1 rounded-md flex items-center justify-center
    ">
                            @switch($laporan->status)
                            @case('approve')
                                Selesai
                                @break
                            @case('unapproved')
                                Tertolak
                                @break
                        @endswitch
                        </span>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="font-medium text-white flex pt-4 justify-start">
        <button class="bg-[#4ACAA4] rounded-md mx-1 w-24 h-10">
            <a href="{{ route('page1') }}">Back</a>
        </button>
    </div>
</div>
</body>

</html>
