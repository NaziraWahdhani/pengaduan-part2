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
            .complaint-section {
                width: 150px;
                height: 150px;
                text-align: center;
                font-family: 'Poppins', sans-serif;
            }
        }
    </style>
</head>
<body class="dark:bg-slate-800 dark:text-slate-200">
<nav>
    <ul class="bg-[#4ACAA4] py-4 flex justify-between items-center">
        <h1 class="text-2xl font-bold ml-8 text-white">Pengaduan Masyarakat Boyolangu</h1>
        <div class="flex items-center space-x-4 mr-8 text-white font-semibold">
            <li><a href="{{ route('index') }}">Home</a></li>
            <li>
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit" class="dropdown-item">Log out</button>
                </form>
            </li>
            <li><a href="admin.blade.php">Admin</a></li>
            <img src="{{ asset('assets/img/profile.svg') }}">
        </div>
    </ul>
</nav>
<h1 class="font-bold ml-8 text-2xl p-6 text-center">SEMUA PENGADUAN MASUK</h1>
<div class="container mx-auto p-6">
    <table class="w-full table-fixed">
        <thead>
        <tr class="bg-[#4ACAA4] text-white">
            <th class="p-2">NO</th>
            <th class="p-2">NAMA</th>
            <th class="p-2"> LAPORAN</th>
            <th class="p-2">FOTO</th>
            <th class="p-2">TANGGAL KEJADIAN</th>
            <th class="p-2">ACTION</th>
        </tr>
        </thead>
        <tbody>
        <!-- Sample row, you can add more rows dynamically -->
        <form action="{{ route('laporan') }}" method="post">
        <tr class="bg-gray-100 text-center">
            <td class="p-2">1</td>
            <td class="p-2">WWW</td>
            <td class="p-2">Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
            <td class="p-2"><img src="{{ asset('assets/img/login.png') }}" alt=""></td>
            <td class="p-2">2024-01-07</td>
            <td class="p-2">
                <button class="bg-[#4ACAA4] text-white p-2 rounded-lg"><a href="lengkap.blade.php">Lihat Lengkap</a></button>
            </td>
        </tr>
        </form>
        </tbody>
    </table>
    <div class="font-medium text-white flex pt-4 justify-start">
        <button class="bg-[#4ACAA4] rounded-md mx-1 w-24 h-10"><a href="{{ route('index') }}">Back</a></button>
    </div>
</div>
</body>
</div>
</html>
