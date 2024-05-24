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

        textarea {
            width: 100%;
            resize: vertical;
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
    </ul>
</nav>

<h1 class="font-bold ml-8 text-2xl p-6 text-center">BERI TANGGAPAN</h1>

<form action="{{ route('tanggapan.store') }}" method="post">
    @csrf

    <input type="hidden" name="laporan_id" value="{{ $laporan->id }}">
    <div class="container mx-auto">
        <div class="border rounded-lg shadow-xl p-10 text-center">
            <textarea type="text" name="tanggapan" placeholder="Tulis tanggapan..."></textarea>
            <div class="font-light text-white flex pt-4 justify-end">
                <button type="button" class="bg-red-500 rounded-md mx-1 w-24 h-10">Back</button>
                <button type="submit" class="bg-[#4ACAA4] rounded-md mx-1 w-24 h-10">Send</button>
            </div>
        </div>
    </div>
</form>
