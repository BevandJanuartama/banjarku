<!DOCTYPE html>
<html lang="id">
<head>
    <link rel="icon" type="image/png" href="https://i.ibb.co.com/FbCZwKHC/1200px-Lambang-Kota-Banjarbaru-svg.png">

    <meta charset="UTF-8">
    <title>Banjarku</title>
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

    <!-- Hero -->
    <section class="bg-banjarYellow text-banjarRed py-16 text-center">
        <img src="https://i.ibb.co.com/FbCZwKHC/1200px-Lambang-Kota-Banjarbaru-svg.png" alt="Logo" class="mx-auto w-20 h-20 mb-4">
        <h2 class="text-4xl font-bold mb-2">Selamat Datang di Banjarku.co.id</h2>
        <p class="text-sm text-gray-700 mb-4 italic">Salamat Datang di Banjarku.co.id</p>
        <p class="text-xl">Jelajahi kekayaan kuliner dan budaya tradisional Banjar</p>
        <p class="text-sm text-gray-700 italic">Jelajahi kayaan kuliner lawan budaya tradisi Banjar.</p>
    </section>

    <!-- Categories Section -->
    <div class="max-w-6xl mx-auto px-4 py-10">
        <h3 class="text-2xl font-bold mb-2 text-banjarRed text-center">Makanan Khas Banjar</h3>
        <p class="text-sm text-center text-gray-600 mb-8 italic">Pakanan urang Banjar</p>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
            <!-- Ketupat Kandangan -->
            <a href="/ketupat" class="block bg-banjarYellow text-banjarRed rounded-lg shadow hover:shadow-lg hover:bg-yellow-400 transition text-center overflow-hidden">
                <img src="https://i.ibb.co.com/9kG50Kws/086788000-1680755472-shutterstock-2012174117.jpg" alt="Ketupat Kandangan" class="w-full h-48 object-cover">
                <div class="p-4 font-semibold text-xl">Ketupat Kandangan</div>
            </a>

            <!-- Soto Banjar -->
            <a href="/soto" class="block bg-banjarYellow text-banjarRed rounded-lg shadow hover:shadow-lg hover:bg-yellow-400 transition text-center overflow-hidden">
                <img src="https://media.tampang.com/tm_images/article/202411/buah-organikvpq8cjbb24h64gea.jpg" alt="Soto Banjar" class="w-full h-48 object-cover">
                <div class="p-4 font-semibold text-xl">Soto Banjar</div>
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
