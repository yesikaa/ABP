# LAPORAN PRAKTIKUM APLIKASI BERBASIS PLATFORM

## PERTEMUAN 8

<div align="center">

<img width="250" alt="Logo Telkom University" src="https://github.com/user-attachments/assets/22ae9b17-5e73-48a6-b5dd-281e6c70613e">

<br><br>

Disusun oleh:

**Yesika Widiyani**  
**2311102195**  
**S1 IF-11-04**

Dosen Pengampu:

**Cahyo Prihantoro, S.Kom., M.Eng.**

**PROGRAM STUDI S1 INFORMATIKA**  
**DIREKTORAT KAMPUS PURWOKERTO – UNIVERSITAS TELKOM**  
**2026**

</div>

---

## Dasar Praktikum

Praktikum ini membahas pengembangan aplikasi berbasis web menggunakan framework Laravel. Pada bagian pertama, Laravel digunakan untuk membuat aplikasi CRUD sederhana pada data produk. Pada bagian berikutnya, Laravel digunakan untuk mengimplementasikan autentikasi, middleware, session, serta relasi antar tabel.

Secara umum, praktikum ini bertujuan agar mahasiswa memahami alur kerja Laravel mulai dari konfigurasi project, pembuatan route, controller, model, migration, blade view, hingga pengujian aplikasi melalui browser.

---

## Output Modul 12

### Tampilan Data Produk

![Tampilan Data Produk](docs/images/viewproduk.png)

### Tampilan Tambah Produk

![Tampilan Tambah Produk](docs/images/tambahproduk.png)

### Tampilan Edit Produk

![Tampilan Edit Produk](docs/images/editproduk.png)

### Tampilan Hapus Produk

![Tampilan Hapus Produk](docs/images/hapusproduk.png)

---

## Output Modul 13

Modul 13 berfokus pada autentikasi, middleware, dan relasi antar tabel. Alur sederhananya adalah pengguna melakukan login, kemudian akses ke halaman produk dibatasi menggunakan middleware auth. Setelah berhasil login, pengguna dapat melihat data produk dan relasi variannya.

![Alur Modul 13](docs/images/alur-modul13.png)

Akun login yang digunakan untuk project `laravel-modul13`:

```text
Email    : yesika@example.com
Password : password123
```
