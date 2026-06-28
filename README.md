Sistem Pendataan Buku Perpustakaan
Identitas Mahasiswa
Nama : Fauziyatul Jember
NIM : [240631100030]
Mata Kuliah : Pemrograman Web
Judul Aplikasi : Sistem Pendataan Buku Perpustakaan
Deskripsi Aplikasi

Sistem Pendataan Buku Perpustakaan merupakan aplikasi berbasis web yang dibuat menggunakan PHP dan MySQL. Aplikasi ini digunakan untuk mengelola data buku perpustakaan secara mudah dan terstruktur.

Aplikasi memiliki dua jenis pengguna yaitu Admin dan User. Admin dapat mengelola data buku seperti menambah, mengubah, dan menghapus data buku. Sedangkan User hanya dapat melihat daftar buku yang tersedia pada sistem.

Fitur Aplikasi
Admin
Login Admin
Menambah Data Buku
Mengubah Data Buku
Menghapus Data Buku
Melihat Daftar Buku
User
Login User
Melihat Daftar Buku


Struktur Database
Database : perpustakaan
Tabel User
Field	Type
id	int
username	varchar(50)
password	varchar(255)
role	enum('admin','user')
Tabel Buku
Field	Type
id	int
judul	varchar(100)
penulis	varchar(100)
penerbit	varchar(100)
tahun	int
Cara Menjalankan Aplikasi
Install XAMPP.
Jalankan Apache dan MySQL.
Buka phpMyAdmin.

Buat database dengan nama:

perpustakaan
Import file database perpustakaan.sql.

Salin folder project ke:

C:\xampp\htdocs\UAS_WEB

Buka browser dan akses:

http://localhost/UAS_WEB
Login menggunakan akun yang tersedia.
Akun Admin

Username : admin

Password : admin123

Akun User

Username : user

Password : user123

Teknologi yang Digunakan
PHP
MySQL
Bootstrap 5
HTML
CSS
XAMPP
Penutup

Aplikasi Sistem Pendataan Buku Perpustakaan ini dibuat untuk memenuhi tugas Ujian Akhir Semester Mata Kuliah Pemrograman We

ssitem pengerjaanya di bantu oleh chat gpt untuk membantu dalam pengerjaannya 
