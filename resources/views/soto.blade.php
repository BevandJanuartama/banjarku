<!DOCTYPE html>
<html lang="id">
<head>
    <link rel="icon" type="image/png" href="https://i.ibb.co.com/FbCZwKHC/1200px-Lambang-Kota-Banjarbaru-svg.png">

    <meta charset="UTF-8">
    <title>Soto Banjar</title>
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
        <h3 class="text-2xl font-bold mb-2 text-banjarRed text-center">Soto Banjar</h3>
        <p class="text-sm text-center text-gray-600 mb-8 italic">Soto khas Kalimantan Selatan yang menggugah selera</p>

        <!-- Deskripsi Budaya -->
        <section class="max-w-4xl mx-auto px-4 py-6 text-center">
            <p class="text-lg text-gray-700 mb-4 italic">Soto beraroma rempah yang menjadi kebanggaan Banjar.</p>
            <p class="text-base text-gray-800 leading-relaxed">
                Soto Banjar adalah soto khas Kalimantan Selatan yang dikenal dengan kuah bening beraroma harum rempah seperti kayu manis, cengkeh, dan kapulaga. 
                Biasanya disajikan dengan suwiran ayam, perkedel kentang, dan irisan telur, lengkap dengan lontong atau ketupat. 
                Kehangatan Soto Banjar tak hanya terasa dari rasanya, tetapi juga dari nilai kebudayaan dan keramahan yang menyertainya.
            </p>
        </section>

        <h4 class="text-xl font-semibold mt-10 mb-2 text-banjarRed text-center">Rekomendasi Soto Banjar</h4>
        <p class="text-sm text-center text-gray-600 mb-8 italic">Soto khas Banjar di Banjarbaru yang wajib dicoba</p>

        <!-- Soto Box -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
            <!-- Haj Anang -->
            <a href="https://g.co/kgs/dbdizZi" target="_blank" class="block bg-banjarYellow text-banjarRed rounded-lg shadow hover:shadow-lg hover:bg-yellow-400 transition text-center overflow-hidden">
                <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0f/29/6e/04/photo1jpg.jpg?w=900&h=500&s=1" alt="Soto Haj Anang" class="w-full h-48 object-cover">
                <div class="p-4 font-semibold text-xl">Soto Ayam Haj Anang</div>
            </a>

            <!-- Arjuna -->
            <a href="https://g.co/kgs/fojXpuj" target="_blank" class="block bg-banjarYellow text-banjarRed rounded-lg shadow hover:shadow-lg hover:bg-yellow-400 transition text-center overflow-hidden">
                <img src="https://lh3.googleusercontent.com/gps-cs-s/AB5caB-BDozp7Q5E3hGFxPz0pAzj7jKZ8NeTAFDgtm00bGPhvEf8XEtt-tvuNg2EnB5ubwJ-5fLHQyADLKbDOpCHtJ3rJSKzqKzvBJUHTFhWiky2-2a-RI487BpBaDzEODlSR77cgKVR=s1360-w1360-h1020" alt="Soto Banjar Arjuna" class="w-full h-48 object-cover">
                <div class="p-4 font-semibold text-xl">Soto Banjar Arjuna</div>
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
