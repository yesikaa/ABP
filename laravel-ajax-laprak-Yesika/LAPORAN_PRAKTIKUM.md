# LAPORAN PRAKTIKUM APLIKASI BERBASIS WEB

## Aplikasi Menampilkan Data Mahasiswa Menggunakan Laravel dan AJAX

### Identitas Praktikan

Nama: Siti Madina Halim Siregar  
NIM: 2311102243  
Kelas: S1IF-11-04  
Program Studi: Teknik Informatika  

---

## 1. Pendahuluan

### 1.1 Latar Belakang

Perkembangan aplikasi berbasis web membuat proses penyajian informasi menjadi lebih cepat dan mudah diakses. Salah satu teknologi yang banyak digunakan dalam pengembangan aplikasi web adalah Laravel. Laravel merupakan framework PHP yang menyediakan struktur pengembangan aplikasi secara lebih rapi melalui penggunaan route, controller, view, dan konfigurasi lainnya.

Dalam pengembangan aplikasi web, proses pertukaran data antara server dan halaman web tidak selalu harus dilakukan dengan memuat ulang seluruh halaman. AJAX dapat digunakan untuk mengambil data dari server secara dinamis tanpa melakukan refresh halaman. Pada praktikum ini, AJAX diterapkan menggunakan Fetch API untuk mengambil data mahasiswa dari server Laravel dan menampilkannya dalam bentuk tabel.

Praktikum ini menggunakan data mahasiswa dalam format JSON. Data tersebut dibaca oleh controller Laravel, kemudian dikirimkan ke halaman web melalui route khusus. Dengan alur tersebut, praktikan dapat memahami hubungan antara route, controller, view, JSON, dan AJAX dalam aplikasi berbasis web.

### 1.2 Rumusan Masalah

Rumusan masalah pada praktikum ini adalah sebagai berikut:

1. Bagaimana cara membuat aplikasi web sederhana menggunakan Laravel?
2. Bagaimana cara membaca data dari file JSON menggunakan controller Laravel?
3. Bagaimana cara menampilkan data mahasiswa menggunakan AJAX tanpa melakukan refresh halaman?

### 1.3 Tujuan Praktikum

Tujuan dari praktikum ini adalah sebagai berikut:

1. Membuat aplikasi web sederhana menggunakan Laravel.
2. Mengimplementasikan route dan controller pada Laravel.
3. Membaca data mahasiswa dari file JSON.
4. Menggunakan AJAX dengan Fetch API untuk mengambil data dari server.
5. Menampilkan data mahasiswa dalam bentuk tabel pada halaman web.

### 1.4 Manfaat Praktikum

Manfaat dari praktikum ini adalah praktikan dapat memahami dasar pembuatan aplikasi web menggunakan Laravel serta memahami cara kerja AJAX dalam mengambil data dari server. Selain itu, praktikan juga dapat mengetahui bagaimana data dalam format JSON dapat digunakan sebagai sumber data sederhana pada aplikasi web.

---

## 2. Landasan Teori

### 2.1 Aplikasi Berbasis Web

Aplikasi berbasis web adalah aplikasi yang berjalan melalui browser dan dapat diakses menggunakan jaringan lokal maupun internet. Aplikasi web biasanya terdiri dari bagian tampilan, proses di sisi server, serta media penyimpanan data. Dengan aplikasi web, pengguna dapat mengakses informasi tanpa harus menginstal aplikasi khusus pada perangkat.

### 2.2 Laravel

Laravel adalah framework PHP yang digunakan untuk membangun aplikasi web secara terstruktur. Laravel menerapkan pola MVC, yaitu Model, View, dan Controller. Pada praktikum ini, Laravel digunakan untuk mengatur route, membuat controller, dan menampilkan halaman web melalui file Blade.

### 2.3 Route

Route adalah bagian Laravel yang digunakan untuk menentukan alamat URL dan menghubungkannya dengan proses tertentu. Pada praktikum ini, route `/` digunakan untuk menampilkan halaman utama, sedangkan route `/data-mahasiswa` digunakan untuk mengambil data mahasiswa dalam format JSON.

### 2.4 Controller

Controller adalah bagian aplikasi yang digunakan untuk mengatur logika pemrosesan data. Pada praktikum ini, controller digunakan untuk membaca file JSON dari folder `storage/app`, kemudian mengembalikan data tersebut dalam bentuk response JSON.

### 2.5 JSON

JSON atau JavaScript Object Notation adalah format data yang ringan dan mudah dibaca oleh manusia maupun mesin. Dalam praktikum ini, JSON digunakan untuk menyimpan data mahasiswa yang berisi nama, NIM, kelas, dan program studi.

### 2.6 AJAX dan Fetch API

AJAX adalah teknik yang digunakan untuk mengambil atau mengirim data ke server tanpa memuat ulang seluruh halaman web. Pada praktikum ini, AJAX diterapkan menggunakan Fetch API. Fetch API digunakan untuk mengambil data dari route `/data-mahasiswa`, kemudian data tersebut ditampilkan ke halaman web dalam bentuk tabel.

---

## 3. Analisis dan Perancangan Sistem

### 3.1 Deskripsi Sistem

Sistem yang dibuat adalah aplikasi web sederhana untuk menampilkan data mahasiswa. Data mahasiswa disimpan pada file `mahasiswa.json`. Ketika pengguna menekan tombol `Tampilkan Data`, halaman web akan mengirim request ke route `/data-mahasiswa`. Selanjutnya, controller membaca file JSON dan mengirimkan data kembali ke halaman dalam format JSON. Data yang diterima kemudian ditampilkan dalam bentuk tabel.

### 3.2 Kebutuhan Sistem

Kebutuhan perangkat lunak yang digunakan dalam praktikum ini adalah sebagai berikut:

1. Visual Studio Code sebagai editor kode.
2. PHP sebagai bahasa pemrograman utama.
3. Composer untuk mengelola dependency Laravel.
4. Laravel sebagai framework aplikasi web.
5. Browser untuk menjalankan dan menguji aplikasi.

### 3.3 Alur Sistem

Alur sistem pada aplikasi ini adalah sebagai berikut:

1. Pengguna membuka halaman utama aplikasi.
2. Sistem menampilkan halaman data mahasiswa.
3. Pengguna menekan tombol `Tampilkan Data`.
4. JavaScript menjalankan fungsi `loadData()`.
5. Fetch API mengirim request ke route `/data-mahasiswa`.
6. Controller membaca file `mahasiswa.json`.
7. Controller mengirimkan response JSON.
8. Data mahasiswa ditampilkan dalam tabel pada halaman web.

### 3.4 Struktur Data JSON

Data mahasiswa disimpan dengan struktur sebagai berikut:

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

Setiap data mahasiswa memiliki empat atribut, yaitu `nama`, `nim`, `kelas`, dan `prodi`.

---

## 4. Implementasi

### 4.1 Implementasi Route

Route dibuat pada file `routes/web.php`. Route pertama digunakan untuk menampilkan halaman utama, sedangkan route kedua digunakan untuk mengambil data mahasiswa.

```php
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::get('/', [MahasiswaController::class, 'index'])->name('home');
Route::get('/data-mahasiswa', [MahasiswaController::class, 'getData'])->name('mahasiswa.data');
```

Route `/` akan memanggil method `index()` pada `MahasiswaController`. Route `/data-mahasiswa` akan memanggil method `getData()` untuk mengambil data mahasiswa.

### 4.2 Implementasi Controller

Controller dibuat pada file `app/Http/Controllers/MahasiswaController.php`. Controller ini memiliki dua method, yaitu `index()` dan `getData()`.

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

Method `index()` digunakan untuk menampilkan halaman `home.blade.php`. Method `getData()` digunakan untuk membaca file JSON. Jika file tidak ditemukan, sistem akan mengirimkan pesan error. Jika file tersedia dan formatnya valid, data akan dikirimkan dalam bentuk JSON.

### 4.3 Implementasi View

Tampilan aplikasi dibuat pada file `resources/views/home.blade.php`. Halaman ini berisi judul aplikasi, tombol untuk menampilkan data, area hasil, dan kode JavaScript untuk mengambil data.

Bagian utama dari proses AJAX terdapat pada kode berikut:

```javascript
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

        let html = '';
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
    });
```

Kode tersebut digunakan untuk mengambil data dari server. Setelah data berhasil diterima, data mahasiswa akan disusun menjadi baris tabel dan ditampilkan pada halaman web.

### 4.4 Implementasi Data JSON

Data mahasiswa disimpan pada file `storage/app/mahasiswa.json`. File ini digunakan sebagai sumber data utama aplikasi. Dengan menggunakan file JSON, aplikasi dapat mengambil data tanpa harus menggunakan database.

---

## 5. Pengujian

Pengujian dilakukan menggunakan metode black-box. Pengujian ini berfokus pada fungsi aplikasi berdasarkan input dan output yang dihasilkan.

| No | Skenario Pengujian | Hasil yang Diharapkan | Hasil Pengujian | Keterangan |
|---|---|---|---|---|
| 1 | Membuka halaman utama aplikasi | Halaman Data Mahasiswa tampil | Sesuai | Berhasil |
| 2 | Menekan tombol Tampilkan Data | Data mahasiswa muncul dalam bentuk tabel | Sesuai | Berhasil |
| 3 | Mengakses route `/data-mahasiswa` | Data tampil dalam format JSON | Sesuai | Berhasil |
| 4 | Data pada file JSON dibaca oleh sistem | Sistem menampilkan nama, NIM, kelas, dan prodi | Sesuai | Berhasil |
| 5 | File JSON tidak tersedia | Sistem menampilkan pesan error | Sesuai | Berhasil |

Berdasarkan hasil pengujian, seluruh fungsi utama aplikasi berjalan sesuai dengan kebutuhan. Aplikasi dapat menampilkan halaman utama, mengambil data mahasiswa dari file JSON, dan menampilkan data tersebut ke dalam tabel menggunakan AJAX.

---

## 6. Hasil dan Pembahasan

Hasil dari praktikum ini adalah aplikasi web sederhana berbasis Laravel yang mampu menampilkan data mahasiswa menggunakan AJAX. Data mahasiswa berhasil dibaca dari file JSON melalui controller Laravel. Setelah data berhasil dibaca, sistem mengirimkannya ke halaman web dalam format JSON.

Pada sisi tampilan, pengguna hanya perlu menekan tombol `Tampilkan Data`. Setelah tombol ditekan, JavaScript menjalankan Fetch API untuk mengambil data dari route `/data-mahasiswa`. Proses ini tidak menyebabkan halaman melakukan refresh, sehingga tampilan terasa lebih dinamis.

Penggunaan JSON pada praktikum ini membuat proses penyimpanan data menjadi sederhana. Praktikan tidak perlu melakukan konfigurasi database sehingga fokus praktikum dapat diarahkan pada pemahaman route, controller, view, dan AJAX. Namun, untuk aplikasi yang lebih besar, penggunaan database tetap lebih disarankan karena lebih aman dan lebih mudah dikelola.

Secara keseluruhan, aplikasi sudah memenuhi tujuan praktikum karena berhasil menampilkan data mahasiswa dari server ke halaman web secara dinamis menggunakan Laravel dan AJAX.

---

## 7. Kesimpulan

Berdasarkan praktikum yang telah dilakukan, dapat disimpulkan bahwa aplikasi menampilkan data mahasiswa menggunakan Laravel dan AJAX berhasil dibuat. Laravel digunakan untuk mengatur route dan controller, sedangkan AJAX dengan Fetch API digunakan untuk mengambil data dari server tanpa memuat ulang halaman. Data mahasiswa yang disimpan dalam file JSON berhasil dibaca oleh controller dan ditampilkan ke halaman web dalam bentuk tabel.

---

## 8. Saran

Aplikasi ini masih sederhana karena data mahasiswa hanya disimpan dalam file JSON. Untuk pengembangan selanjutnya, aplikasi dapat ditambahkan fitur CRUD seperti tambah, edit, dan hapus data mahasiswa. Selain itu, penyimpanan data juga dapat dikembangkan menggunakan database MySQL agar data lebih mudah dikelola dan aplikasi dapat digunakan untuk kebutuhan yang lebih kompleks.
