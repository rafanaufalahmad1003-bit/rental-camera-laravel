# Rental Camera — Starter Laravel

Paket awal mini project Rental Camera dengan Laravel 13. Isinya menyediakan katalog kamera, relasi kategori-produk, CRUD produk, validasi form, pencarian/filter, pagination, migration, dan data contoh.

## Persyaratan

- PHP 8.3 atau lebih baru dan ekstensi PHP standar Laravel (termasuk PDO SQLite atau PDO MySQL).
- Composer.
- Windows: Laravel Herd dapat memasang PHP dan Composer. Setelah pemasangan, buka terminal baru dan pastikan `php -v` menunjukkan 8.3+.

> Komputer yang memakai PHP XAMPP 8.1.25 belum dapat menjalankan Laravel 13. Jangan jalankan `composer install` sampai versi PHP terminal sudah 8.3+.

## Cara menjalankan di Windows

1. Ekstrak ZIP ke folder kerja, misalnya `C:\Users\USER\Documents\rental-camera-laravel`.
2. Buka PowerShell di folder hasil ekstrak. Di File Explorer, buka folder, klik address bar, ketik `powershell`, lalu Enter.
3. Pastikan `php -v` menunjukkan PHP 8.3 atau lebih baru dan `composer --version` berhasil.
4. Jalankan `Copy-Item .env.example .env`.
5. Jalankan `composer install`.
6. Jalankan `php artisan key:generate`.
7. Jalankan `php artisan migrate:fresh --seed` untuk membuat tabel dan data contoh.
8. Jalankan `php artisan serve`.
9. Buka alamat yang ditampilkan (umumnya http://127.0.0.1:8000).

Konfigurasi awal memakai SQLite. Bila ingin MySQL XAMPP, buat database `rental_camera`, ubah DB_CONNECTION menjadi mysql di `.env`, lalu isi DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, dan DB_PASSWORD.

## Fitur awal

- Tampilkan, cari, filter kategori, dan pagination katalog.
- Tambah, ubah, dan hapus kamera.
- Validasi server untuk nama, merek, kategori, tarif, deposit, stok, dan deskripsi.
- Relasi Eloquent Category hasMany Product dan Product belongsTo Category.
- Migration dan seeder kategori serta produk contoh.

Ini fondasi awal. Sesuaikan fitur tambahan yang diminta Web 5 (misalnya transaksi sewa/pengembalian, aturan bisnis P4, autentikasi/otorisasi, dokumentasi, dan screenshot) sebelum dikumpulkan.
