# Banjarku

**Banjarku** (`Banjarku.co.id`) adalah aplikasi web berbasis Laravel yang menyajikan informasi seputar kekayaan kuliner dan budaya tradisional Suku Banjar, Kalimantan Selatan.

## Fitur Utama

- **Beranda Portal (`/banjarku`)**: Halaman utama untuk menjelajahi kategori kuliner dan budaya khas Banjar.
- **Kategori Makanan Khas Banjar (`/food`)**: Menampilkan daftar kuliner tradisional Banjar dengan halaman detail untuk:
  - **Ketupat Kandangan** (`/ketupat`)
  - **Soto Banjar** (`/soto`)
- **Kategori Budaya Banjar (`/culture`)**: Menampilkan pengenalan budaya serta kerajinan khas Banjar dengan halaman detail untuk:
  - **Sasirangan** (`/sasirangan`)
  - **Kerajinan Kayu Ulin** (`/ulin`)
- **Struktur Data Kategori & Artikel**: Tersedia tabel dan model `categories` dan `posts` untuk pengelolaan konten berdasarkan kategori.

## Teknologi yang Digunakan

- **Backend**: PHP `^8.2`, Laravel Framework `^12.0`
- **Frontend**: Blade Templates, Tailwind CSS (`^4.0.0` via Vite & Tailwind CDN pada tampilan)
- **Build Tool**: Vite `^6.2.4` (`laravel-vite-plugin`, `concurrently`)
- **Database**: SQLite (konfigurasi bawaan pada `.env.example`)

## Struktur Proyek

```text
banjarku/
├── app/
│   ├── Http/Controllers/
│   │   └── HomeController.php   # Logika rute beranda, kategori, dan halaman detail
│   └── Models/
│       ├── Category.php         # Model kategori
│       ├── Post.php             # Model artikel/konten
│       └── User.php             # Model pengguna
├── database/
│   └── migrations/              # Skema tabel users, cache, jobs, categories, dan posts
├── resources/
│   └── views/                   # Tampilan Blade (banjarku, food, culture, soto, ketupat, sasirangan, ulin, welcome)
├── routes/
│   └── web.php                  # Definisi rute web aplikasi
├── .env.example                 # Contoh konfigurasi environment
├── composer.json                # Dependensi PHP & skrip Laravel
└── package.json                 # Dependensi Node.js & skrip Vite
```

## Konfigurasi Environment

Referensi konfigurasi environment tersedia pada file `.env.example`. Beberapa variabel penting yang dapat disesuaikan setelah menyalinnya ke `.env`:

- `APP_NAME`, `APP_ENV`, `APP_DEBUG`, `APP_URL`: Pengaturan dasar aplikasi.
- `APP_KEY`: Kunci enkripsi aplikasi (dibuat dengan `php artisan key:generate`).
- `DB_CONNECTION`: Secara default menggunakan `sqlite` (atau sesuaikan host, port, nama database, username, dan password bila menggunakan database lain).
- `SESSION_DRIVER`, `CACHE_STORE`, `QUEUE_CONNECTION`: Secara default menggunakan `database`.

## Instalasi & Menjalankan Aplikasi

1. **Clone repositori dan masuk ke direktori proyek**
   ```bash
   git clone https://github.com/BevandJanuartama/banjarku.git
   cd banjarku
   ```

2. **Install dependensi PHP dan Node.js**
   ```bash
   composer install
   npm install
   ```

3. **Siapkan file environment**
   - Linux/macOS:
     ```bash
     cp .env.example .env
     ```
   - Windows (PowerShell):
     ```powershell
     Copy-Item .env.example .env
     ```
   Kemudian generate application key:
   ```bash
   php artisan key:generate
   ```

4. **Siapkan database dan jalankan migrasi**
   Jika menggunakan SQLite (default di `.env.example`), pastikan file `database/database.sqlite` tersedia, lalu jalankan migrasi:
   ```bash
   php artisan migrate
   ```

5. **Jalankan server pengembangan**
   Anda dapat menjalankan seluruh layanan pengembangan (server Laravel, queue listener, log Pail, dan Vite) dengan satu perintah:
   ```bash
   composer run dev
   ```
   Atau jalankan secara terpisah:
   ```bash
   php artisan serve
   npm run dev
   ```
   Untuk build aset produksi:
   ```bash
   npm run build
   ```

6. **Akses aplikasi**
   Buka browser dan kunjungi `http://localhost:8000/banjarku` (atau `http://127.0.0.1:8000/banjarku`).

## Lisensi

Aplikasi ini menggunakan framework Laravel yang berlisensi [MIT](https://opensource.org/licenses/MIT).
