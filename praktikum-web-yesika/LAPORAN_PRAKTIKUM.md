# LAPORAN PRAKTIKUM  
# APLIKASI BERBASIS PLATFORM  

## MODUL 8 - CRUD PRODUK MENGGUNAKAN LARAVEL

<br>

<p align="center">
  <img src="https://upload.wikimedia.org/wikipedia/commons/0/0c/Logo_Telkom_University_potrait.png" width="260" alt="Logo Telkom University">
</p>

<br>

<p align="center">
  Disusun oleh:
</p>

<p align="center">
  <b>Yesika Widiyani</b><br>
  <b>2311102195 S1 IF-11-REG04</b>
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

Aplikasi berbasis web banyak digunakan untuk membantu proses pengolahan data agar lebih cepat, rapi, dan mudah diakses. Salah satu framework yang dapat digunakan untuk membangun aplikasi web adalah Laravel. Laravel menyediakan struktur pengembangan yang jelas melalui penggunaan route, controller, model, migration, dan view.

Pada praktikum ini dibuat aplikasi CRUD data produk berbasis Laravel. Aplikasi ini dapat digunakan untuk menampilkan, menambahkan, mengubah, dan menghapus data produk. Data produk disimpan ke dalam database SQLite sehingga proses pengelolaan data dapat dilakukan secara langsung melalui halaman web.

## 1.2 Tujuan Praktikum

Tujuan dari praktikum ini adalah:

1. Memahami cara membuat aplikasi CRUD menggunakan Laravel.
2. Memahami penggunaan route resource pada Laravel.
3. Memahami penggunaan model dan migration untuk mengelola database.
4. Memahami penggunaan controller untuk memproses data.
5. Membuat tampilan sederhana menggunakan Blade dan Bootstrap.

## 1.3 Alat dan Bahan

Alat dan bahan yang digunakan dalam praktikum ini adalah:

1. Laptop atau komputer.
2. Visual Studio Code.
3. PHP.
4. Composer.
5. Laravel.
6. SQLite.
7. Browser.
8. Git dan GitHub.

---

# 2. Pembahasan

## 2.1 Deskripsi Aplikasi

Aplikasi yang dibuat adalah aplikasi CRUD data produk. Data yang dikelola terdiri dari nama produk, deskripsi, harga, dan stok. Aplikasi ini memiliki halaman utama untuk menampilkan semua data produk, halaman tambah produk, halaman edit produk, dan fitur hapus data.

Alur kerja aplikasi dimulai dari pengguna membuka halaman data produk. Pada halaman tersebut, pengguna dapat melihat daftar produk yang sudah tersimpan. Pengguna juga dapat menambahkan produk baru melalui tombol tambah produk. Jika terdapat data yang perlu diperbaiki, pengguna dapat menekan tombol edit. Jika data sudah tidak diperlukan, pengguna dapat menghapusnya melalui tombol hapus.

---

# 3. Code

## 3.1 File `routes/web.php`

```php
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return redirect('/products');
});

Route::resource('products', ProductController::class);
```

Kode di atas digunakan untuk mengatur route aplikasi. Route utama `/` akan diarahkan ke halaman `/products`. Route `products` menggunakan resource route sehingga Laravel otomatis membuat route untuk fitur index, create, store, edit, update, dan destroy.

---

## 3.2 File `app/Models/Product.php`

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'nama_produk',
        'deskripsi',
        'harga',
        'stok',
    ];
}
```

Model `Product` digunakan untuk menghubungkan aplikasi dengan tabel `products` pada database. Properti `$fillable` digunakan untuk menentukan kolom yang boleh diisi melalui proses create dan update.

---

## 3.3 File `database/migrations/2026_04_27_004619_create_products_table.php`

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('nama_produk');
            $table->text('deskripsi')->nullable();
            $table->integer('harga');
            $table->integer('stok');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
```

Migration di atas digunakan untuk membuat tabel `products`. Tabel tersebut memiliki kolom `id`, `nama_produk`, `deskripsi`, `harga`, `stok`, `created_at`, dan `updated_at`.

---

## 3.4 File `app/Http/Controllers/ProductController.php`

```php
<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->get();

        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required|min:3',
            'deskripsi' => 'nullable',
            'harga' => 'required|integer|min:0',
            'stok' => 'required|integer|min:0',
        ]);

        Product::create([
            'nama_produk' => $request->nama_produk,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'stok' => $request->stok,
        ]);

        return redirect('/products')->with('success', 'Data produk berhasil ditambahkan!');
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'nama_produk' => 'required|min:3',
            'deskripsi' => 'nullable',
            'harga' => 'required|integer|min:0',
            'stok' => 'required|integer|min:0',
        ]);

        $product->update([
            'nama_produk' => $request->nama_produk,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'stok' => $request->stok,
        ]);

        return redirect('/products')->with('success', 'Data produk berhasil diupdate!');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect('/products')->with('success', 'Data produk berhasil dihapus!');
    }
}
```

Controller di atas digunakan untuk mengatur seluruh proses CRUD. Fungsi `index()` digunakan untuk menampilkan data produk. Fungsi `create()` digunakan untuk menampilkan form tambah produk. Fungsi `store()` digunakan untuk menyimpan data baru. Fungsi `edit()` digunakan untuk membuka form edit. Fungsi `update()` digunakan untuk memperbarui data. Fungsi `destroy()` digunakan untuk menghapus data produk.

---

## 3.5 File `resources/views/products/index.blade.php`

```php
@forelse ($products as $index => $product)
    <tr>
        <td>{{ $index + 1 }}</td>
        <td>{{ $product->nama_produk }}</td>
        <td>{{ $product->deskripsi }}</td>
        <td>Rp {{ number_format($product->harga, 0, ',', '.') }}</td>
        <td>{{ $product->stok }}</td>
        <td>
            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm">
                Edit
            </a>

            <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus data ini?')">
                    Hapus
                </button>
            </form>
        </td>
    </tr>
@empty
    <tr>
        <td colspan="6" class="text-center">Belum ada data produk.</td>
    </tr>
@endforelse
```

Potongan kode di atas digunakan untuk menampilkan data produk dalam bentuk tabel. Jika data produk kosong, maka aplikasi akan menampilkan pesan bahwa belum ada data produk.

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

6. Pastikan file database SQLite sudah ada. Jika belum ada, jalankan:

```bash
type nul > database\database.sqlite
```

7. Jalankan migration dan seeder:

```bash
php artisan migrate --seed
```

8. Jalankan server Laravel:

```bash
php artisan serve
```

9. Buka browser, kemudian akses alamat berikut:

```text
http://127.0.0.1:8000
```

---

# 5. Output

## 5.1 Tampilan Data Produk

Halaman data produk menampilkan daftar produk yang sudah tersimpan di database. Pada halaman ini terdapat tabel yang berisi nomor, nama produk, deskripsi, harga, stok, dan tombol aksi. Tombol aksi terdiri dari tombol edit dan hapus.

## 5.2 Tampilan Tambah Produk

Halaman tambah produk digunakan untuk menambahkan data produk baru. Pengguna dapat mengisi nama produk, deskripsi, harga, dan stok. Setelah tombol simpan ditekan, data akan tersimpan ke database dan ditampilkan pada halaman data produk.

## 5.3 Tampilan Edit Produk

Halaman edit produk digunakan untuk mengubah data produk yang sudah tersimpan. Data lama akan tampil secara otomatis pada form edit. Setelah tombol update ditekan, data akan diperbarui dan pengguna akan diarahkan kembali ke halaman data produk.

## 5.4 Tampilan Hapus Produk

Fitur hapus produk digunakan untuk menghapus data produk dari database. Sebelum data dihapus, aplikasi akan menampilkan konfirmasi agar pengguna tidak menghapus data secara tidak sengaja.

---

# 6. Kesimpulan

Berdasarkan praktikum yang telah dilakukan, aplikasi CRUD produk berbasis Laravel berhasil dibuat dan dijalankan. Aplikasi ini dapat menampilkan, menambahkan, mengubah, dan menghapus data produk. Laravel digunakan untuk mengatur route, model, controller, migration, dan view, sedangkan Bootstrap digunakan untuk membuat tampilan aplikasi menjadi lebih rapi dan mudah digunakan.

---

# 7. Link GitHub

Link GitHub:  
https://github.com/yesikaa/ABP
