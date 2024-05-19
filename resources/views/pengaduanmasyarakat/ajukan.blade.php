<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,700;1,800&display=swap" rel="stylesheet">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://cdn.tailwindcss.com"></script>
<title>Ajukan Pengaduan</title>
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
<div class="text-center font-bold text-[#313131] m-12 text-2xl p-4">
    <h1>Forum</h1>
</div>
<div class="ml-56 -mr-56 mb-8" style="background-image: url('grup2.svg'); width: 773px; height: 268px; display: flex;"></div>
<div class="mt-3 text-center">
    <input type="text" class="border-[#292C44] ml-4 mr-4 border w-3/5 text-base px-2 py-1 focus:outline-none focus:ring-2 focus:border-gray-600 rounded-lg mb-5" placeholder="Nama">
</div>
<div class="mt-3 text-center">
    <input type="text" class="border-[#292C44] ml-4 mr-4 border w-3/5 text-base px-2 py-1 focus:outline-none focus:ring-2 focus:border-gray-600 rounded-lg mb-5" placeholder="Alamat">
</div>
<div class="mx-auto max-w-3xl">
    <div class="bg-[#FBFBFB] p-4 ">
        <div class="mb-4">
            <label for="tanggal_kejadian" class="text-gray-400">Tanggal Kejadian</label>
            <input type="date" id="tanggal_kejadian" class="text-gray-400 border-[#292C44] border w-full mt-1 p-2 rounded-md focus:outline-none focus:ring focus:ring-gray-400">
        </div>
    </div>
</div>
<div class="mt-3 text-center">
    <div class="mt-3 text-center">
        <select class="border-[#292C44] ml-4 mr-4 border w-3/5 text-base px-2 py-1 focus:outline-none focus:ring-2 focus:border-gray-600 rounded-lg mb-5 bg-white text-gray-400">
            <option value="" disabled selected>Pilih Kategori Laporan</option>
            <option value="gangguan_lingkungan">Gangguan Lingkungan</option>
            <option value="bantuan_sosial">Bantuan Sosial</option>
            <option value="kerusakan_lingkungan">Kerusakan Lingkungan</option>
        </select>
    </div>
    <div class="mx-auto max-w-3xl text-left">
        <div class="bg-[#FBFBFB] p-4 ">
            <div class="mb-4">
                <label for="tanggal_kejadian" class="text-gray-400">Unggah Gambar</label>
                <input type="file"  class="text-gray-400 border-[#292C44] border w-full mt-1 p-2 rounded-md focus:outline-none focus:ring focus:ring-gray-400">
            </div>
        </div>
    </div>
<div class="mt-3 text-center">
    <textarea class="border-[#292C44] ml-4 mr-4 border w-3/5 text-base px-2 py-1 focus:outline-none focus:ring-2 focus:border-gray-600 rounded-lg mb-5" rows="6" placeholder="Isi Laporan..."></textarea>
</div>
<div class="mt-3 text-left m-10 mb-5 p-1">
    <a href="page1.html" class="bg-[#4ACAA4] hover:bg-[#39A07B] text-white font-semibold py-2 px-4 rounded-full ml-48">Kembali</a>
    <a href="#" class="bg-[#4ACAA4] hover:bg-[#39A07B] text-white font-semibold py-2 px-4 rounded-full float-right mr-48">Kirim</a>
</div>
<br><br><br><br><br><br>
<footer class="bg-[#4ACAA4] text-center text-white">
    <p>&copy; 2024 </p>
   </footer>
</body>
</html>