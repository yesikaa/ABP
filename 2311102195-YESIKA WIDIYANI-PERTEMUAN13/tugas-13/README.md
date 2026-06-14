# LAPORAN PRAKTIKUM APLIKASI BERBASIS PLATFORM

## TUGAS PERTEMUAN 13

Praktikum Flutter — Implementasi Provider dan Notifikasi pada Flutter

---

## Identitas

Nama: Yesika Widiyani  
NIM: 2311102195  
Kelas: S1 IF-11-04  
Dosen Pengampu: Cahyo Prihantoro, S.Kom., M.Eng.

---

## 1. Penjelasan Singkat

Project ini merupakan aplikasi Flutter sederhana yang menerapkan state management menggunakan package `provider` dan fitur local notification menggunakan package `flutter_local_notifications`. Aplikasi menampilkan nilai counter yang dapat bertambah ketika tombol tambah ditekan. Setiap kali nilai counter bertambah, aplikasi juga menampilkan notifikasi lokal berisi informasi nilai counter terbaru.

Tujuan praktikum ini adalah memahami cara memisahkan state aplikasi menggunakan Provider, memahami penggunaan `ChangeNotifier`, serta memahami cara memunculkan notifikasi lokal pada aplikasi Flutter.

---

## 2. Fitur Aplikasi

1. Menampilkan identitas mahasiswa.
2. Menampilkan nilai counter.
3. Menambah nilai counter menggunakan tombol tambah.
4. Mengelola perubahan nilai counter menggunakan Provider.
5. Menampilkan notifikasi lokal ketika counter bertambah.

---

## 3. Struktur Folder

```text
2311102195-YESIKA WIDIYANI-PERTEMUAN13
├── SS
│   ├── tampilan awal aplikasi.jpeg
│   ├── izin untuk aktifkan notifikasi.jpeg
│   ├── klik counter pertama.jpeg
│   └── klik counter kedua.jpeg
├── tugas-13
│   ├── android
│   ├── ios
│   ├── lib
│   │   └── main.dart
│   ├── test
│   ├── web
│   └── pubspec.yaml
├── README.md
└── LAPORAN_PRAKTIKUM.md
```

---

## 4. Source Code Utama

File utama aplikasi terdapat pada:

```text
tugas-13/lib/main.dart
```

Pada file tersebut terdapat beberapa bagian utama:

1. `FlutterLocalNotificationsPlugin`, digunakan untuk mengatur notifikasi lokal.
2. `CounterProvider`, digunakan untuk menyimpan dan mengubah nilai counter.
3. `ChangeNotifierProvider`, digunakan agar state dapat diakses oleh widget lain.
4. `MyHomePage`, digunakan sebagai halaman utama aplikasi.
5. `FloatingActionButton`, digunakan untuk menambah nilai counter dan memunculkan notifikasi.

---

## 5. Output Aplikasi
bahwa Provider dapat membantu pengelolaan state aplikasi menjadi lebih terstruktur, sedangkan local notification dapat digunakan untuk memberikan informasi langsung kepada pengguna.
