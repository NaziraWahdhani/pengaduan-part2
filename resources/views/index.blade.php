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
    <title>Admin | Home</title>
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
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
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
<h1 class="font-bold ml-8 text-2xl p-6">DASHBOARD ADMIN</h1>
<div class="flex ml-8">
    <section>
        <div class="complaint-section bg-[#4ACAA4] p-3 ml-5 rounded-xl shadow-lg shadow-gray-500">
            <h2 class="py-4 text-white font-bold">Semua Pengaduan</h2>
            <div class="bg-white w-12 rounded-lg mx-auto hover:bg-[#dbdcdc]">
                <button><a href="{{ route('all') }}">Lihat</a></button>
            </div>
        </div>
    </section>
    <section>
        <div class="complaint-section bg-[#4ACAA4] p-3 ml-5 rounded-xl shadow-lg shadow-gray-500">
            <h2 class="py-4 text-white font-bold">Pengaduan Diselesaikan</h2>
            <div class="bg-white w-12 rounded-lg mx-auto hover:bg-[#dbdcdc]">
                <button><a href="{{ route('selesai') }}">Lihat</a></button>
            </div>
        </div>
    </section>
    <section>
        <div class="complaint-section bg-[#4ACAA4] p-3 ml-5 rounded-xl shadow-lg shadow-gray-500">
            <h2 class="py-4 text-white font-bold">Pengaduan Ditolak</h2>
            <div class="bg-white w-12 rounded-lg mx-auto hover:bg-[#dbdcdc]">
                <button><a href="{{ route('tolak') }}">Lihat</a></button>
            </div>
        </div>
</div>
</section>
<!-- Script untuk chart -->
<div class="chartCard w-50 h-50">
    <div class="chartBox">
        <canvas id="myChart"></canvas>
    </div>
</div>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js/dist/chart.umd.min.js"></script>
<script>
    // setup
    const data = {
        labels: ['Kerusakan lingkungan', 'Bantuan Sosial', 'Gangguan Lingkungan'],
        datasets: [{
            label: 'Rekap Laporan',
            data: [18, 12, 9],
            backgroundColor: [
                'rgba(255, 26, 104, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(0, 0, 0, 0.2)'
            ],
            borderColor: [
                'rgba(255, 26, 104, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(0, 0, 0, 1)'
            ],
            borderWidth: 1
        }]
    };
    // config
    const config = {
        type: 'bar',
        data,
        options: {
            maintainAspectRatio: false,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    };
    // render init block
    const myChart = new Chart(
        document.getElementById('myChart'),
        config
    );
    // Instantly assign Chart.js version
    const chartVersion = document.getElementById('chartVersion');
    chartVersion.innerText = Chart.version;
</script>
</div>
</body>
</html>
