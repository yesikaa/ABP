# Praktikum Laravel AJAX - Data Mahasiswa

Project ini merupakan aplikasi web sederhana berbasis Laravel yang digunakan untuk menampilkan data mahasiswa dari file JSON menggunakan AJAX dengan Fetch API.

## Deskripsi Singkat

Aplikasi ini memiliki satu halaman utama untuk menampilkan data mahasiswa. Data disimpan dalam file `storage/app/mahasiswa.json`, kemudian dibaca melalui `MahasiswaController`. Pada bagian tampilan, data diambil dari route `/data-mahasiswa` menggunakan Fetch API sehingga data dapat muncul tanpa melakukan refresh halaman.

## Teknologi yang Digunakan

- PHP
- Laravel
- HTML
- CSS
- JavaScript
- Fetch API / AJAX
- JSON
- Composer
- Visual Studio Code

## Struktur File Penting

```text
laravel-ajax-laprak-ready/
├── app/
│   └── Http/
│       └── Controllers/
│           └── MahasiswaController.php
├── resources/
│   └── views/
│       └── home.blade.php
├── routes/
│   └── web.php
├── storage/
│   └── app/
│       └── mahasiswa.json
├── LAPORAN_PRAKTIKUM.md
└── README.md
```

## Cara Membuka Project di VS Code

1. Ekstrak file ZIP project.
2. Buka Visual Studio Code.
3. Pilih menu `File` > `Open Folder`.
4. Pilih folder `laravel-ajax-laprak-ready`.
5. Buka terminal di VS Code dengan menekan `Ctrl + Shift + ``.

## Cara Menjalankan Project

Pastikan PHP dan Composer sudah terpasang di laptop.

### 1. Install dependency Laravel

```bash
composer install
```

### 2. Salin file environment

Untuk Windows CMD:

```bash
copy .env.example .env
```

Untuk Git Bash, Linux, atau macOS:

```bash
cp .env.example .env
```

### 3. Buat application key

```bash
php artisan key:generate
```

### 4. Jalankan server Laravel

```bash
php artisan serve
```

### 5. Buka aplikasi di browser

Buka alamat berikut:

```text
http://127.0.0.1:8000
```

Klik tombol `Tampilkan Data`. Jika berhasil, data mahasiswa akan muncul dalam bentuk tabel.

## Route yang Digunakan

| Route | Fungsi |
|---|---|
| `/` | Menampilkan halaman utama aplikasi |
| `/data-mahasiswa` | Mengambil data mahasiswa dalam format JSON |

## File Data Mahasiswa

Data mahasiswa berada di file:

```text
storage/app/mahasiswa.json
```

Contoh isi data:

```json
[
    {
        "nama": "Siti Madina Halim Siregar",
        "nim": "2311102243",
        "kelas": "S1IF-11-04",
        "prodi": "Teknik Informatika"
    }
]
```

Data dapat diubah sesuai kebutuhan dengan tetap mempertahankan format JSON yang benar.

## Bagian yang Perlu Di-screenshot untuk Laprak

1. Struktur folder project di VS Code.
2. File `routes/web.php`.
3. File `MahasiswaController.php`.
4. File `home.blade.php`.
5. File `storage/app/mahasiswa.json`.
6. Tampilan awal aplikasi di browser.
7. Tampilan setelah tombol `Tampilkan Data` ditekan.
8. Tampilan route `/data-mahasiswa` di browser.

## Catatan Penting

Project ini tidak menggunakan database MySQL. Data mahasiswa diambil dari file JSON agar alur praktikum lebih sederhana dan fokus pada penggunaan Laravel, route, controller, dan AJAX.
