# Panduan Menjalankan Aplikasi PHP Native

Aplikasi ini dibangun menggunakan PHP Native, sehingga membutuhkan server lokal (seperti XAMPP atau WAMP) untuk menjalankannya.

## Persiapan Sebelum Menjalankan

1. **Pastikan XAMPP/WAMP Terinstal**
   Aplikasi ini membutuhkan XAMPP atau WAMP sebagai server lokal. Jika belum terinstal, silakan unduh dan instal terlebih dahulu:
   - [Unduh XAMPP](https://www.apachefriends.org/index.html)
   - [Unduh WAMP](http://www.wampserver.com/en/)

2. **Aktifkan Apache Server di XAMPP/WAMP**
   Setelah menginstal XAMPP atau WAMP, buka aplikasi tersebut dan aktifkan Apache. Hal ini diperlukan agar PHP dapat berjalan di server lokal.

## Langkah-Langkah Menjalankan Aplikasi

1. **Salin Folder Aplikasi ke `htdocs`**
   Pindahkan atau salin folder aplikasi ini ke dalam folder `htdocs` di direktori XAMPP (biasanya `C:\xampp\htdocs\` untuk Windows) atau WAMP (biasanya `C:\wamp\www\` untuk Windows).

2. **Masuk ke Folder `htdocs`**
   Buka terminal atau command prompt, lalu navigasi ke dalam folder `htdocs` tempat aplikasi ini disalin. Contoh perintah di Windows:

   ```bash
   cd C:\xampp\htdocs\nama_folder_aplikasi
