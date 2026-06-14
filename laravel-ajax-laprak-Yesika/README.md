# LAPORAN PRAKTIKUM

# APLIKASI BERBASIS PLATFORM

## PERTEMUAN 7 - LARAVEL AJAX

<br>

<p align="center">
  <img src="https://upload.wikimedia.org/wikipedia/commons/0/0c/Logo_Telkom_University_potrait.png" width="260">
</p>

<br>

<p align="center">
  Disusun oleh:
</p>

<p align="center">
  <b>Yesika Widiyani</b><br>
  <b>[ISI NIM KAMU] S1 IF-[ISI KELAS KAMU]</b>
</p>

<br>

<p align="center">
  Dosen Pengampu:
</p>

<p align="center">
  <b>Cahyo Prihantoro, S.Kom., M.Eng.</b>
</p>

<br>

<p align="center">
  <b>PROGRAM STUDI S1 INFORMATIKA</b><br>
  <b>DIREKTORAT KAMPUS PURWOKERTO – UNIVERSITAS TELKOM</b><br>
  <b>2026</b>
</p>

---

# 1. Pendahuluan

## 1.1 Latar Belakang

Perkembangan aplikasi berbasis web membuat proses pengolahan dan penyajian data menjadi lebih cepat dan mudah diakses. Salah satu teknologi yang sering digunakan dalam pengembangan aplikasi web adalah Laravel. Laravel merupakan framework PHP yang dapat membantu proses pembuatan aplikasi menjadi lebih terstruktur melalui penggunaan route, controller, dan view.

Pada praktikum ini dibuat aplikasi sederhana untuk menampilkan data mahasiswa menggunakan Laravel dan AJAX. Data mahasiswa disimpan dalam file JSON, kemudian diambil melalui route Laravel dan ditampilkan pada halaman web tanpa perlu melakukan refresh halaman. Dengan menggunakan AJAX, proses pengambilan data menjadi lebih dinamis karena data dapat dimuat langsung dari server ke halaman web.

## 1.2 Tujuan Praktikum

Tujuan dari praktikum ini adalah:

1. Memahami cara membuat aplikasi web sederhana menggunakan Laravel.
2. Memahami penggunaan route dan controller pada Laravel.
3. Memahami cara membaca data dari file JSON.
4. Memahami penggunaan AJAX dengan Fetch API.
5. Menampilkan data mahasiswa ke halaman web dalam bentuk tabel.

## 1.3 Alat dan Bahan

Alat dan bahan yang digunakan dalam praktikum ini adalah:

1. Laptop atau komputer.
2. Visual Studio Code.
3. PHP.
4. Composer.
5. Laravel.
6. Browser.
7. Git dan GitHub.

---

# 2. Pembahasan

## 2.1 Deskripsi Aplikasi

Aplikasi yang dibuat merupakan aplikasi web sederhana berbasis Laravel untuk menampilkan data mahasiswa. Data mahasiswa tidak disimpan menggunakan database, melainkan menggunakan file JSON bernama `mahasiswa.json`.

Alur kerja aplikasi dimulai dari pengguna membuka halaman utama. Setelah itu, pengguna menekan tombol `Tampilkan Data`. Tombol tersebut akan menjalankan fungsi JavaScript yang mengambil data dari route `/data-mahasiswa` menggunakan Fetch API. Data yang diterima kemudian ditampilkan ke dalam tabel pada halaman web.

---

# 3. Code

## 3.1 File `routes/web.php`

```php
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::get('/', [MahasiswaController::class, 'index'])->name('home');
Route::get('/data-mahasiswa', [MahasiswaController::class, 'getData'])->name('mahasiswa.data');
```

Kode di atas digunakan untuk membuat dua route utama. Route `/` digunakan untuk menampilkan halaman utama aplikasi, sedangkan route `/data-mahasiswa` digunakan untuk mengambil data mahasiswa dalam format JSON.

---

## 3.2 File `app/Http/Controllers/MahasiswaController.php`

```php
<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\View\View;

class MahasiswaController extends Controller
{
    public function index(): View
    {
        return view('home');
    }

    public function getData(): JsonResponse
    {
        $path = storage_path('app/mahasiswa.json');

        if (! file_exists($path)) {
            return response()->json([
                'status' => false,
                'message' => 'File mahasiswa.json tidak ditemukan.',
                'data' => [],
            ], 404);
        }

        $json = file_get_contents($path);
        $data = json_decode($json, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            return response()->json([
                'status' => false,
                'message' => 'Format file mahasiswa.json tidak valid.',
                'data' => [],
            ], 500);
        }

        return response()->json([
            'status' => true,
            'message' => 'Data mahasiswa berhasil diambil.',
            'data' => $data,
        ]);
    }
}
```

Kode controller di atas memiliki dua fungsi utama. Fungsi `index()` digunakan untuk menampilkan halaman `home.blade.php`. Fungsi `getData()` digunakan untuk membaca file `mahasiswa.json` dari folder `storage/app`, kemudian mengirimkannya dalam bentuk JSON.

Jika file tidak ditemukan, sistem akan menampilkan pesan error. Jika format JSON tidak valid, sistem juga akan mengembalikan pesan error. Jika data berhasil dibaca, maka data mahasiswa akan dikirimkan ke halaman web.

---

## 3.3 File `storage/app/mahasiswa.json`

```json
[
    {
        "nama": "Siti Madina Halim Siregar",
        "nim": "2311102243",
        "kelas": "S1IF-11-04",
        "prodi": "Teknik Informatika"
    },
    {
        "nama": "Budi Santoso",
        "nim": "2311100001",
        "kelas": "S1IF-11-04",
        "prodi": "Teknik Informatika"
    },
    {
        "nama": "Andi Wijaya",
        "nim": "2311100002",
        "kelas": "S1IF-11-04",
        "prodi": "Teknik Informatika"
    },
    {
        "nama": "Dina Putri",
        "nim": "2311100003",
        "kelas": "S1IF-11-05",
        "prodi": "Sistem Informasi"
    },
    {
        "nama": "Rizky Pratama",
        "nim": "2311100004",
        "kelas": "S1IF-11-05",
        "prodi": "Teknik Informatika"
    }
]
```

File JSON di atas digunakan sebagai sumber data mahasiswa. Setiap data berisi nama, NIM, kelas, dan program studi. Data ini nantinya akan dibaca oleh controller dan ditampilkan pada halaman web.

---

## 3.4 File `resources/views/home.blade.php`

```html
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa Laravel AJAX</title>
    <style>
        * {
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            margin: 0;
            min-height: 100vh;
            background: #f4f6f8;
            color: #222;
        }

        .container {
            width: 90%;
            max-width: 950px;
            margin: 40px auto;
            background: #ffffff;
            padding: 28px;
            border-radius: 14px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 16px;
            margin-bottom: 24px;
        }

        h1 {
            margin: 0 0 8px 0;
            font-size: 28px;
        }

        p {
            margin: 0;
            color: #555;
            line-height: 1.6;
        }

        button {
            border: none;
            background: #2563eb;
            color: #ffffff;
            padding: 12px 18px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 15px;
            white-space: nowrap;
        }

        button:hover {
            background: #1d4ed8;
        }

        .info {
            background: #eff6ff;
            border-left: 4px solid #2563eb;
            padding: 12px 16px;
            margin-bottom: 20px;
            border-radius: 8px;
            color: #1e3a8a;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 16px;
            overflow: hidden;
            border-radius: 10px;
        }

        th, td {
            border: 1px solid #e5e7eb;
            padding: 12px;
            text-align: left;
        }

        th {
            background: #1f2937;
            color: #ffffff;
        }

        tr:nth-child(even) {
            background: #f9fafb;
        }

        .loading {
            margin-top: 16px;
            color: #2563eb;
        }

        .error {
            margin-top: 16px;
            color: #b91c1c;
            background: #fee2e2;
            padding: 12px;
            border-radius: 8px;
        }

        .success {
            margin-top: 16px;
        }

        @media (max-width: 700px) {
            .header {
                flex-direction: column;
                align-items: flex-start;
            }

            button {
                width: 100%;
            }

            .table-wrapper {
                overflow-x: auto;
            }
        }
    </style>
</head>
<body>
    <main class="container">
        <section class="header">
            <div>
                <h1>Data Mahasiswa</h1>
                <p>Aplikasi sederhana berbasis Laravel yang menampilkan data mahasiswa dari file JSON menggunakan AJAX.</p>
            </div>
            <button type="button" onclick="loadData()">Tampilkan Data</button>
        </section>

        <section class="info">
            Klik tombol <strong>Tampilkan Data</strong> untuk mengambil data dari route <code>/data-mahasiswa</code> tanpa me-refresh halaman.
        </section>

        <section id="hasil"></section>
    </main>

    <script>
        function loadData() {
            const hasil = document.getElementById('hasil');
            hasil.innerHTML = '<p class="loading">Sedang mengambil data mahasiswa...</p>';

            fetch('/data-mahasiswa')
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Gagal mengambil data dari server.');
                    }
                    return response.json();
                })
                .then(result => {
                    if (!result.status) {
                        throw new Error(result.message || 'Data tidak berhasil dimuat.');
                    }

                    let html = `
                        <div class="success">
                            <p>${result.message}</p>
                            <div class="table-wrapper">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>NIM</th>
                                            <th>Kelas</th>
                                            <th>Program Studi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                    `;

                    result.data.forEach((mahasiswa, index) => {
                        html += `
                            <tr>
                                <td>${index + 1}</td>
                                <td>${mahasiswa.nama}</td>
                                <td>${mahasiswa.nim}</td>
                                <td>${mahasiswa.kelas}</td>
                                <td>${mahasiswa.prodi}</td>
                            </tr>
                        `;
                    });

                    html += `
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    `;

                    hasil.innerHTML = html;
                })
                .catch(error => {
                    hasil.innerHTML = `<div class="error">${error.message}</div>`;
                });
        }
    </script>
</body>
</html>
```

File `home.blade.php` digunakan sebagai tampilan utama aplikasi. Pada halaman ini terdapat tombol `Tampilkan Data`. Ketika tombol tersebut diklik, fungsi `loadData()` akan dijalankan. Fungsi tersebut mengambil data dari route `/data-mahasiswa`, kemudian menampilkan data mahasiswa ke dalam tabel.

---

# 4. Cara Menjalankan Program

Langkah-langkah untuk menjalankan aplikasi adalah sebagai berikut:

1. Buka folder project menggunakan Visual Studio Code.
2. Buka terminal pada Visual Studio Code.
3. Jalankan perintah berikut untuk memasang dependency Laravel:

```bash
composer install
```

4. Salin file `.env.example` menjadi `.env`:

```bash
copy .env.example .env
```

5. Buat application key Laravel:

```bash
php artisan key:generate
```

6. Jalankan server Laravel:

```bash
php artisan serve
```

7. Buka browser, kemudian akses alamat berikut:

```text
http://127.0.0.1:8000
```

8. Klik tombol `Tampilkan Data` untuk menampilkan data mahasiswa.

---

# 5. Output

## 5.1 Tampilan Awal Aplikasi

Pada tampilan awal aplikasi, halaman menampilkan judul `Data Mahasiswa`, deskripsi singkat aplikasi, dan tombol `Tampilkan Data`. Tombol tersebut digunakan untuk mengambil data mahasiswa dari file JSON melalui route `/data-mahasiswa`.

## 5.2 Tampilan Setelah Data Ditampilkan

Setelah tombol `Tampilkan Data` ditekan, sistem akan mengambil data mahasiswa menggunakan Fetch API. Jika data berhasil diambil, maka data mahasiswa akan ditampilkan dalam bentuk tabel. Tabel tersebut berisi kolom nomor, nama, NIM, kelas, dan program studi.

## 5.3 Tampilan Route JSON

Route `/data-mahasiswa` akan menampilkan data dalam format JSON. Data tersebut berisi status, pesan, dan daftar data mahasiswa yang dibaca dari file `mahasiswa.json`.

---

# 6. Kesimpulan

Berdasarkan praktikum yang telah dilakukan, aplikasi berbasis web menggunakan Laravel dan AJAX berhasil dibuat untuk menampilkan data mahasiswa. Laravel digunakan untuk mengatur route, controller, dan view, sedangkan AJAX dengan Fetch API digunakan untuk mengambil data dari server tanpa melakukan refresh halaman. Data mahasiswa berhasil dibaca dari file JSON dan ditampilkan dalam bentuk tabel pada halaman web.

---
