<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Budaya Banjar</title>
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
        <h3 class="text-2xl font-bold mb-2 text-banjarRed text-center">Budaya Banjar</h3>
        <p class="text-sm text-center text-gray-600 mb-8 italic">Jelajahi kayaan kuliner lawan budaya tradisi Banjar</p>

        <!-- Deskripsi Budaya -->
        <section class="max-w-4xl mx-auto px-4 py-6 text-center">
            <p class="text-lg text-gray-700 mb-4 italic">Sasirangan: kain adat penuh warna dan makna.</p>
            <p class="text-base text-gray-800 leading-relaxed">
                Sasirangan adalah kain tradisional khas Suku Banjar di Kalimantan Selatan yang dibuat melalui proses pewarnaan ikat celup. 
                Motifnya memiliki filosofi dan makna tersendiri, sering digunakan dalam upacara adat hingga pakaian sehari-hari. 
                Pembuatan sasirangan mencerminkan nilai kreativitas, spiritualitas, dan kearifan lokal masyarakat Banjar.
            </p><br>
            <p class="text-lg text-gray-700 mb-4 italic">Kerajinan Ulin: Kerajinan kayu Banjar Peniuh Kreatifitas.</p>
            <p class="text-base text-gray-800 leading-relaxed">
                Kerajinan ulin adalah salah satu warisan budaya yang berasal dari Kalimantan, khususnya dari Suku Banjar. Ulin, yang juga dikenal sebagai kayu besi, terkenal karena kekuatan dan keawetannya, serta ketahanannya terhadap rayap dan air. Proses pembuatan kerajinan ini memanfaatkan limbah kayu ulin, yang diolah menjadi berbagai produk seperti meja, kursi, dan perabotan lainnya..
            </p>
        </section>

        <h4 class="text-xl font-semibold mt-10 mb-2 text-banjarRed text-center">Kerajinan Khas Banjar</h4>
        <p class="text-sm text-center text-gray-600 mb-8 italic">Hasil tangan kreatif urang Banjar</p>

        <!-- Kerajinan Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
            <!-- Sasirangan -->
            <a href="/sasirangan" class="block bg-banjarYellow text-banjarRed rounded-lg shadow hover:shadow-lg hover:bg-yellow-400 transition text-center overflow-hidden">
                <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjwhNGUlOW4tm_wl6COL7MXQSEPI55vAr34h3k7W6SiNP36qDfY2vwbrzGnzJldun-WKqFQX4zwasya48ZoFtaDsazRohs6wa4u7DPoqIEX6wtuBmm9DPkfF9AmLMlHE0HvBNwbeVXz8Io/w0/IMG-20120918-00103.jpg" alt="Sasirangan" class="w-full h-48 object-cover">
                <div class="p-4 font-semibold text-xl">Sasirangan</div>
            </a>

            <!-- Kayu Ulin -->
            <a href="/ulin" class="block bg-banjarYellow text-banjarRed rounded-lg shadow hover:shadow-lg hover:bg-yellow-400 transition text-center overflow-hidden">
                <img src="https://i.ibb.co.com/1GVpx9Bd/kerajinan-kayu-ulin.jpg" alt="Kerajinan Kayu Ulin" class="w-full h-48 object-cover">
                <div class="p-4 font-semibold text-xl">Kerajinan Kayu Ulin</div>
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
