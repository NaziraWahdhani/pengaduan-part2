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
    <title>Login</title>
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
<body class="mt-28 bg-[#4ACAA4]">

{{--Login--}}
<div class="max-w-3xl my-10 border border-slate-200 rounded-xl mx-auto p-5 font-inter bg-slate-200 flex items-center shadow-lg shadow-gray-500">
        <div class="flex-1">
        <h1 class="font-bold text-2xl mt-8 text-center">LOG IN</h1>
        <h2 class="text-center text-[#4ACAA4]">_________________________________________</h2>
        <p class="mb-7 text-light text-xs text-center">Masukkan Email dan Password yang telah diberikan</p>

        <form action="{{ route('login-proses') }}" method="post" class="mb-5">
            @csrf
            <label for="email">
                <span class="block font-semibold mb-1 after:content-['*'] after:text-red-500 after:ml-0.5">Email</span>
                <input type="email" id="email" name="email" placeholder="Masukkan Email..." class="px-3 py-2 border shadow rounded w-full block text-sm placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:focus:border-pink-700 peer"/>
                <p class="text-sm m-1 text-pink-700 invisible peer-invalid:visible">Email tidak valid!</p>
            </label>
            <label for="password">
                <span class="block font-semibold mb-1 after:content-['*'] after:text-red-500 after:ml-0.5">Password</span>
                <input type="password" id="password" name="password" placeholder="Masukkan Password..." class="px-3 py-2 border shadow rounded w-full block text-sm placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:focus:border-pink-700 peer"/>
                <p class="text-sm m-1 text-pink-700 invisible peer-invalid:visible">Password Salah!</p>
            </label>
            <div class="bg-white w-24 rounded-lg mb-2 text-s mx-auto text-center font-semibold hover:bg-[#b4fee8]">
                <button type="submit">Login</button>
            </div>
        </form>
    </div>

    <!-- Bagian kanan: gambar -->
    <div class="flex-1 text-center">
        <img src="{{ asset('assets/img/login.png') }}" class="mx-auto">
    </div>

</div>
</body>
</html>
