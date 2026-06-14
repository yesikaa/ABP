# LAPORAN PRAKTIKUM  
# APLIKASI BERBASIS PLATFORM  

## PERTEMUAN 12 - FLUTTER KAMERA, GALERI, DAN NOTIFIKASI LOKAL

<p align="center">
  <img width="180" alt="Logo Telkom University" src="https://github.com/user-attachments/assets/8937914f-d19f-4e65-b983-c927c8559522" />
</p>

<p align="center">
  Disusun oleh:<br>
  <b>Yesika Widiyani</b><br>
  <b>2311102195</b><br>
  <b>S1 IF-11-04</b>
</p>

<p align="center">
  Dosen Pengampu:<br>
  <b>Cahyo Prihantoro, S.Kom., M.Eng.</b>
</p>

<p align="center">
  <b>PROGRAM STUDI S1 INFORMATIKA</b><br>
  <b>DIREKTORAT KAMPUS PURWOKERTO - UNIVERSITAS TELKOM</b><br>
  <b>2026</b>
</p>

---

## 1. Penjelasan Singkat

Project ini merupakan aplikasi Flutter untuk Pertemuan 12 yang membahas penggunaan API perangkat keras dan notifikasi lokal. Fitur utama aplikasi adalah mengambil foto menggunakan kamera perangkat, memilih gambar dari galeri, menampilkan gambar pada halaman utama, dan menampilkan notifikasi lokal setelah gambar berhasil diambil atau dipilih.

Aplikasi ini menggunakan beberapa package Flutter, yaitu `camera` untuk membuka kamera perangkat, `image_picker` untuk memilih gambar dari galeri, dan `flutter_local_notifications` untuk menampilkan notifikasi lokal pada perangkat Android.

---

## 2. Fitur Aplikasi

Fitur yang terdapat pada aplikasi ini adalah:

1. Menampilkan identitas mahasiswa.
2. Mengambil foto menggunakan kamera perangkat.
3. Memilih gambar dari galeri.
4. Menampilkan preview gambar yang dipilih atau diambil.
5. Menampilkan notifikasi lokal setelah gambar berhasil diproses.
6. Menyediakan tombol notifikasi manual pada bagian AppBar.

---

## 3. Widget yang Digunakan

### 3.1 `MyApp`

Widget `MyApp` merupakan root aplikasi. Widget ini mengatur `MaterialApp`, tema aplikasi, warna utama, dan menentukan `HomePage` sebagai halaman pertama.

### 3.2 `HomePage`

Widget `HomePage` merupakan halaman utama aplikasi. Di dalamnya terdapat kartu identitas mahasiswa, area preview foto, tombol ambil foto, tombol pilih galeri, dan tombol notifikasi manual.

### 3.3 `CameraScreen`

Widget `CameraScreen` digunakan untuk membuka kamera perangkat. Widget ini menggunakan `CameraController`, `FutureBuilder`, dan `CameraPreview` agar kamera dapat ditampilkan secara langsung sebelum pengguna mengambil gambar.

### 3.4 `FlutterLocalNotificationsPlugin`

Plugin ini digunakan untuk membuat dan menampilkan notifikasi lokal. Notifikasi akan muncul ketika pengguna berhasil mengambil foto dari kamera atau memilih gambar dari galeri.

---

## 4. Struktur Project

```text
2311102195-YESIKA WIDIYANI-PERTEMUAN12
├── README.md
├── LAPORAN_PRAKTIKUM.md
├── SS
│   ├── hal_utama_kosong.jpeg
│   ├── hal_utama_camera.jpeg
│   ├── hal_utama_gallery.jpeg
│   ├── kamera_aktif.jpeg
│   ├── notifikasi_camera.jpeg
│   └── notifikasi_gallery.jpeg
└── tugas-12
    ├── android
    ├── ios
    ├── lib
    │   └── main.dart
    ├── test
    ├── web
    └── pubspec.yaml
```
