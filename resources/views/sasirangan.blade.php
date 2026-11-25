<!DOCTYPE html>
<html lang="id">
<head>
    <link rel="icon" type="image/png" href="https://i.ibb.co.com/FbCZwKHC/1200px-Lambang-Kota-Banjarbaru-svg.png">
    <meta charset="UTF-8">
    <title>Sasirangan - Banjarku</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
                <li><a href="/banjarku" class="hover:text-banjarYellow transition">Beranda</a></li>
                <li><a href="/budaya" class="hover:text-banjarYellow transition">Budaya</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="bg-banjarYellow text-banjarRed py-16 text-center">
        <h2 class="text-4xl font-bold mb-2">Sasirangan</h2>
        <p class="text-sm text-gray-700 italic mb-4">Kain tradisional yang mencerminkan identitas budaya Banjar</p>
        <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjwhNGUlOW4tm_wl6COL7MXQSEPI55vAr34h3k7W6SiNP36qDfY2vwbrzGnzJldun-WKqFQX4zwasya48ZoFtaDsazRohs6wa4u7DPoqIEX6wtuBmm9DPkfF9AmLMlHE0HvBNwbeVXz8Io/w0/IMG-20120918-00103.jpg" alt="Sasirangan" class="mx-auto rounded-lg shadow-lg w-full max-w-3xl object-cover">
    </section>

    <!-- Content Section -->
    <div class="max-w-4xl mx-auto px-4 py-10">
        <h3 class="text-2xl font-semibold text-banjarRed mb-4">Apa Itu Sasirangan?</h3>
        <p class="text-gray-700 leading-relaxed mb-4">
            Sasirangan adalah kain tradisional khas suku Banjar di Kalimantan Selatan. Nama "sasirangan" berasal dari kata “sirang” yang berarti menjahit tangan. Kain ini awalnya digunakan sebagai pakaian khusus untuk pengobatan dalam tradisi kepercayaan Banjar.
        </p>
        <p class="text-gray-700 leading-relaxed mb-4">
            Ciri khas kain sasirangan adalah motifnya yang dibuat dengan teknik ikat celup dan pewarnaan alami. Motifnya mengandung makna filosofis seperti perlindungan, keseimbangan, dan kekuatan spiritual.
        </p>
        <p class="text-gray-700 leading-relaxed">
            Saat ini, kain sasirangan telah menjadi simbol kebanggaan masyarakat Banjar dan digunakan dalam berbagai acara adat, fashion modern, hingga souvenir budaya.
        </p>
    </div>

    <!-- Rekomendasi Section -->
    <div class="max-w-6xl mx-auto px-4 py-10">
        <h3 class="text-2xl font-bold mb-2 text-banjarRed text-center">Rekomendasi Toko Sasirangan</h3>
        <p class="text-sm text-center text-gray-600 mb-8 italic">Pilihan ulun, lawan toko kain sasirangan unggulan di Banua</p>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
            <!-- diyang -->
            <a href="https://g.co/kgs/N7enNp1" class="block bg-banjarYellow text-banjarRed rounded-lg shadow hover:shadow-lg hover:bg-yellow-400 transition text-center overflow-hidden">
                <img src="https://lh3.googleusercontent.com/gps-cs-s/AB5caB8wOLMY41nyVb_kv69gzeklltrexSyir7fxgfQ3SuAMGhjXJWKEHGaifwSy1qZuEEqiQSXlhukq8NcPySN3k3H4fKd-8FMmqOE2rYJzmyW0HSzXN-UMXQUb8hi5S7ma1pI8usU=s1360-w1360-h1020" alt="Ketupat Kandangan" class="w-full h-48 object-cover">
                <div class="p-4 font-semibold text-xl">Diyang Kinjut</div>
            </a>

            <!-- taamer -->
            <a href="https://g.co/kgs/oyRzy5m" class="block bg-banjarYellow text-banjarRed rounded-lg shadow hover:shadow-lg hover:bg-yellow-400 transition text-center overflow-hidden">
                <img src="https://i.ibb.co.com/Hp3S3Cqt/2016-11-12.jpg" alt="Soto Banjar" class="w-full h-48 object-cover">
                <div class="p-4 font-semibold text-xl">Taamir Sasirangan</div>
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
