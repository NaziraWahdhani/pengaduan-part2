<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,700;1,800&display=swap" rel="stylesheet">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Home</title>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: #FBFBFB;
      margin: 0;
      padding: 0;
    }
  </style>
</head>
<body>
    <div class="text-1xl text-right m-5 p-2 font-bold text-[#39A07B]">
        <ul class="hover:text-gray-500">
          <li><a href="{{ route('home') }}">Keluar</a></li>
        </ul>
      </div>
      <br><br>
      <div class="text-4xl font-bold text-[#313131] m-6 p-4">
        <h1>
          Ada <span class="text-[#4ACAA4]">Masalah</span> yang Perlu Kami Bantu?
        </h1>
      </div>

      <div class="text-2xl font-semibold text-[#313131] m-6 p-4 mt-[-40px]">
        Segera Tulis Laporan Anda!, Kami akan<br>
        Melakukan Tindak Lanjut dengan Cepat.<br>
        Suara Anda adalah Perubahan!.
        </div>
        <div class="w-full xl:w-1/2 xl: absolute bottom-28 right-4 md:w-96 lg:w-96">
          <img src="{{ asset('assets/img/page.png') }}" alt="">
        </div>
        <button class="mt-3 text-left m-10 mb-5 p-1 ">
            <a href="{{ route('ajukan') }}" class="bg-[#4ACAA4] hover:bg-[#39A07B] text-white font-semibold py-2 px-4 rounded-full mr-5">Ajukan Pengaduan</a>
            <a href="tanggapan.html" class="bg-[#4ACAA4] hover:bg-[#39A07B] text-white font-semibold py-2 px-4 rounded-full">Lihat Tanggapan</a>
        </button>
        <br><br><br><br><br><br><br><br>
        <footer class="bg-[#4ACAA4] text-center text-white">
          <p>&copy; 2024 </p>
         </footer>
</body>
</html>
