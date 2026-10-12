# Pembaruan CRUD Rental Camera

Ekstrak ZIP ini langsung ke `C:\xampp\htdocs\rental-camera-laravel`. Gabungkan folder dan pilih Replace jika diminta. Paket tidak menyertakan `.env` atau `vendor`.

Setelah menyalin file, dari PowerShell pada folder proyek jalankan:

1. `php artisan view:clear`
2. `php artisan migrate --seed`
3. `php artisan serve`

Buka `/login`. Paket ini melengkapi tambah, lihat, ubah, hapus untuk kategori, peralatan, dan pelanggan. Penghapusan ditolak bila data masih terhubung ke kamera/transaksi agar histori rental tidak rusak.
