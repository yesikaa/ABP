# LAPORAN PRAKTIKUM APLIKASI BERBASIS PLATFORM

## PERTEMUAN 8 - MODUL 12 CRUD PRODUK

<div align="center">

<img width="240" alt="Logo Telkom University" src="https://upload.wikimedia.org/wikipedia/commons/0/0c/Logo_Telkom_University_potrait.png">

<br><br>

**Yesika Widiyani**  
**2311102195**  
**S1 IF-11-04**

**Cahyo Prihantoro, S.Kom., M.Eng.**

</div>

---

## Dasar Praktikum

Modul ini membahas pembuatan aplikasi CRUD produk menggunakan Laravel. Aplikasi dibuat dengan konsep MVC yang terdiri dari model `Product`, controller `ProductController`, route resource, migration tabel `products`, dan tampilan Blade.

---

## Fitur Aplikasi

1. Menampilkan data produk.
2. Menambahkan data produk.
3. Mengedit data produk.
4. Menghapus data produk.
5. Validasi input produk.

---

## Output

### Tampilan Data Produk

![Tampilan Data Produk](viewproduk.png)

### Tampilan Tambah Produk

![Tampilan Tambah Produk](tambahproduk.png)

### Tampilan Edit Produk

![Tampilan Edit Produk](editproduk.png)

### Tampilan Hapus Produk

![Tampilan Hapus Produk](hapusproduk.png)

---

## Cara Menjalankan

```bash
composer install
Copy-Item .env.example .env
php artisan key:generate
php artisan migrate:fresh --seed
php artisan serve
```

Buka browser:

```text
http://127.0.0.1:8000
```

Kalau menggunakan Git Bash, ganti `Copy-Item .env.example .env` menjadi:

```bash
cp .env.example .env
```

---

## Kesimpulan

Aplikasi CRUD produk berhasil dibuat menggunakan Laravel. Fitur tambah, lihat, edit, dan hapus data produk dapat berjalan melalui penerapan route, controller, model, migration, dan view.
