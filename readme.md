## Aplikasi Payment PDAM

### Deskripsi
Aplikasi Payment PDAM adalah aplikasi dummy untuk simulasi pembayaran PDAM yang dikembangkan sebagai bagian dari tes di perusahaan PT Bimasakti Multi Sinergi.

### Teknologi yang Digunakan
- **Bahasa Pemrograman:** PHP
- **Database:** MySQL
- **Server Web:** (Contoh: Apache, Nginx, atau lainnya)

### Prasyarat
- **PHP:** Pastikan PHP telah terinstal.
- **MySQL:** Pastikan MySQL server telah aktif dan dapat diakses.
- **Server Web:** Pastikan server web Anda sudah dikonfigurasi untuk menjalankan aplikasi PHP.

### Instalasi

1. **Clone Repository:**
   ```bash
   git clone https://[your-repository-url]
   ```

2. **Buat Database:**
   Buat database baru di MySQL dengan nama:
   ```
   payment_pdam
   ```

3. **Import File Database:**
   - Masuk ke database `payment_pdam` yang telah dibuat.
   - Import file `.sql` yang terdapat pada folder `database`:
     ```bash
     mysql -u [username] -p payment_pdam < database/payment_pdam_fixed.sql
     ```

4. **Konfigurasi Database:**
   Lakukan penyesuaian konfigurasi database di file `db.php` yang berada di folder `api`:
   ```php
   return [
       'host' => 'localhost',
       'username' => 'root',
       'password' => '',
       'database' => 'payment_pdam'
   ];
   ```

5. **Jalankan Aplikasi:**
   Pastikan server lokal Anda aktif, kemudian akses aplikasi melalui browser pada URL berikut:
   ```
   http://127.0.0.1/Test-bimasakti-Tsany/views/index.php
   ```

### Catatan
- Pastikan semua dependencies telah terinstal di server lokal.
- Jika terjadi masalah, periksa log error pada server lokal Anda untuk mendapatkan detail lebih lanjut.

### Kontak
Jika ada pertanyaan atau masalah terkait aplikasi, silakan hubungi:

**Nama Pengembang:** Ahcmad Tsany Wicaksono  
**Email:** ahmadtsani145@gmail.com

