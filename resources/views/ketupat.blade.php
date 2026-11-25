<!DOCTYPE html>
<html lang="id">
<head>
    <link rel="icon" type="image/png" href="https://i.ibb.co.com/FbCZwKHC/1200px-Lambang-Kota-Banjarbaru-svg.png">

    <meta charset="UTF-8">
    <title>Ketupat Kandangan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        banjarYellow: '#FFD700',
                        banjarRed: '#B22222',
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-white text-gray-900 font-sans">

    <!-- Navbar -->
    <nav class="bg-banjarRed text-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <div class="flex items-center space-x-3">
                <img src="https://i.ibb.co.com/FbCZwKHC/1200px-Lambang-Kota-Banjarbaru-svg.png" alt="Logo" class="w-10 h-10">
                <h1 class="text-2xl font-bold">Banjarku.co.id</h1>
            </div>
            <ul class="flex space-x-6 text-lg">
                <li>
                    <a href="/banjarku" class="hover:text-banjarYellow transition">
                        Beranda
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Section Title -->
    <div class="max-w-6xl mx-auto px-4 py-10">
        <h3 class="text-2xl font-bold mb-2 text-banjarRed text-center">Ketupat Kandangan</h3>
        <p class="text-sm text-center text-gray-600 mb-8 italic">Ketupat khas Hulu Sungai Selatan yang kaya rasa</p>

        <!-- Deskripsi Budaya -->
        <section class="max-w-4xl mx-auto px-4 py-6 text-center">
            <p class="text-lg text-gray-700 mb-4 italic">Kuliner khas yang identik dengan lebaran dan kehangatan keluarga.</p>
            <p class="text-base text-gray-800 leading-relaxed">
                Ketupat Kandangan adalah makanan tradisional dari daerah Kandangan, Kalimantan Selatan. Disajikan dengan kuah santan kuning kental dan ikan haruan (gabus) panggang atau goreng, rasanya gurih dan kaya rempah. 
                Biasanya disajikan saat hari besar seperti Idul Fitri, Ketupat Kandangan kini menjadi sajian yang bisa dinikmati kapan saja sebagai bagian dari kekayaan kuliner Banjar.
            </p>
        </section>

        <h4 class="text-xl font-semibold mt-10 mb-2 text-banjarRed text-center">Rekomendasi Ketupat Kandangan</h4>
        <p class="text-sm text-center text-gray-600 mb-8 italic">Tempat makan Ketupat Kandangan terbaik Pilihan Ulun di Banjarbaru</p>

        <!-- Ketupat Box -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
            <!-- Hj Andang -->
            <a href="https://g.co/kgs/mgqD1SK" target="_blank" class="block bg-banjarYellow text-banjarRed rounded-lg shadow hover:shadow-lg hover:bg-yellow-400 transition text-center overflow-hidden">
                <img src="https://i.ibb.co.com/1JvPCS2X/wpid-20150201-0800372.jpg" alt="Ketupat Kandangan Asli" class="w-full h-48 object-cover">
                <div class="p-4 font-semibold text-xl">Warung Rosi</div>

            <!-- Ketupat Kandangan Asli -->
            <a href="https://g.co/kgs/Th6YdTZ" target="_blank" class="block bg-banjarYellow text-banjarRed rounded-lg shadow hover:shadow-lg hover:bg-yellow-400 transition text-center overflow-hidden">
                <img src="https://i.ibb.co.com/S7t4qsDv/unnamed.jpg" alt="Ketupat Kandangan Asli" class="w-full h-48 object-cover">
                <div class="p-4 font-semibold text-xl">Ketupat Kandangan Mak Haji</div>
            </a>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-banjarRed text-white text-center py-6 mt-12">
        &copy; {{ now()->year }} Banjarku.co.id Semua hak dilindungi.
        <div class="text-sm text-yellow-200">Sadaya hak dilindungi hukum</div>
    </footer>

</body>
</html>
