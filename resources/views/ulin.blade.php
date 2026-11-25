<!DOCTYPE html>
<html lang="id">
<head>
    <link rel="icon" type="image/png" href="https://i.ibb.co.com/FbCZwKHC/1200px-Lambang-Kota-Banjarbaru-svg.png">
    <meta charset="UTF-8">
    <title>Kayu Ulin - Banjarku</title>
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
        <h2 class="text-4xl font-bold mb-2">Kerajinan Kayu Ulin</h2>
        <p class="text-sm text-gray-700 italic mb-4">Kekuatan alam Kalimantan yang diolah menjadi karya seni abadi</p>
        <img src="https://i.ibb.co.com/1GVpx9Bd/kerajinan-kayu-ulin.jpg" alt="Kayu Ulin" class="mx-auto rounded-lg shadow-lg w-full max-w-3xl object-cover">
    </section>

    <!-- Content Section -->
    <div class="max-w-4xl mx-auto px-4 py-10">
        <h3 class="text-2xl font-semibold text-banjarRed mb-4">Apa Itu Kayu Ulin?</h3>
        <p class="text-gray-700 leading-relaxed mb-4">
            Kayu ulin, juga dikenal sebagai kayu besi, adalah salah satu kekayaan alam Kalimantan yang sangat bernilai. Dikenal karena ketahanannya terhadap air dan rayap, kayu ini telah lama digunakan oleh masyarakat Banjar dalam pembangunan rumah adat, jembatan, dan perabotan.
        </p>
        <p class="text-gray-700 leading-relaxed mb-4">
            Dalam dunia kerajinan, kayu ulin diolah menjadi berbagai produk artistik seperti ukiran, patung, hingga perabot tradisional dengan nilai seni tinggi. Kayu ini tidak hanya kuat, tetapi juga memiliki pola serat yang indah dan unik.
        </p>
        <p class="text-gray-700 leading-relaxed">
            Kerajinan dari kayu ulin mencerminkan keuletan dan kearifan lokal masyarakat Banjar dalam memanfaatkan sumber daya alam secara berkelanjutan dan penuh nilai budaya.
        </p>
    </div>

    <!-- Rekomendasi Section -->
    <div class="max-w-6xl mx-auto px-4 py-10">
        <h3 class="text-2xl font-bold mb-2 text-banjarRed text-center">Rekomendasi Pengrajin Kayu Ulin</h3>
        <p class="text-sm text-center text-gray-600 mb-8 italic">Tempat membeli hasil ukiran khas Banjar dari kayu ulin</p>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
            <!-- Pengrajin 1 -->
            <a href="https://g.co/kgs/tGC9nto" class="block bg-banjarYellow text-banjarRed rounded-lg shadow hover:shadow-lg hover:bg-yellow-400 transition text-center overflow-hidden">
                <img src="https://i.ibb.co.com/5WshDvtY/image.png" alt="Toko Kayu Ulin 1" class="w-full h-48 object-cover">
                <div class="p-4 font-semibold text-xl">Garasi Kayoe</div>
            </a>

            <!-- Pengrajin 2 -->
            <a href="https://g.co/kgs/ZSz3yWE" class="block bg-banjarYellow text-banjarRed rounded-lg shadow hover:shadow-lg hover:bg-yellow-400 transition text-center overflow-hidden">
                <img src="https://i.ibb.co.com/tT0FqkN0/image.png" alt="Toko Kayu Ulin 2" class="w-full h-48 object-cover">
                <div class="p-4 font-semibold text-xl">Anakkayu.id</div>
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
