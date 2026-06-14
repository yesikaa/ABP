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

### 5.1 Tampilan Awal Aplikasi

![Tampilan Awal](SS/tampilan%20awal%20aplikasi.jpeg)

Tampilan awal menunjukkan halaman utama aplikasi dengan identitas mahasiswa, nilai counter, dan tombol tambah.

### 5.2 Izin Notifikasi

![Izin Notifikasi](SS/izin%20untuk%20aktifkan%20notifikasi.jpeg)

Saat aplikasi dijalankan pada perangkat Android, sistem dapat meminta izin untuk mengaktifkan notifikasi. Izin ini diperlukan agar notifikasi lokal dapat muncul.

### 5.3 Counter Klik Pertama

![Klik Counter Pertama](SS/klik%20counter%20pertama.jpeg)

Setelah tombol tambah ditekan pertama kali, nilai counter bertambah dan notifikasi lokal ditampilkan.

### 5.4 Counter Klik Kedua

![Klik Counter Kedua](SS/klik%20counter%20kedua.jpeg)

Ketika tombol tambah ditekan kembali, nilai counter bertambah lagi dan notifikasi menampilkan nilai terbaru.

---

## 6. Langkah Menjalankan Project

Project ini lebih cocok dijalankan pada Android emulator atau HP Android karena menggunakan notifikasi lokal. Chrome bisa digunakan untuk melihat tampilan, tetapi fitur notifikasi lokal bisa tidak berjalan sempurna.

### 6.1 Buka Folder Project

Buka folder berikut di VS Code:

```text
C:\Users\Yesika Widiyani\OneDrive\Documents\ABP\2311102195-YESIKA WIDIYANI-PERTEMUAN13
```

Lalu masuk ke folder project Flutter:

```bash
cd "C:\Users\Yesika Widiyani\OneDrive\Documents\ABP\2311102195-YESIKA WIDIYANI-PERTEMUAN13\tugas-13"
```

### 6.2 Ambil Dependency

```bash
flutter pub get
```

Jika muncul error symlink di Windows, aktifkan Developer Mode dengan perintah:

```bash
start ms-settings:developers
```

Aktifkan `Developer Mode`, lalu tutup dan buka ulang VS Code. Setelah itu jalankan ulang:

```bash
flutter clean
flutter pub get
```

### 6.3 Cek Device

```bash
flutter devices
```

Jika menggunakan Chrome:

```bash
flutter run -d chrome
```

Jika menggunakan Android emulator atau HP Android:

```bash
flutter run
```

Jika ada banyak device, gunakan ID device tertentu:

```bash
flutter run -d <device_id>
```

### 6.4 Stop Project

Untuk menghentikan aplikasi dari terminal:

```bash
q
```

atau:

```bash
CTRL + C
```

Jika muncul `Terminate batch job (Y/N)?`, ketik `Y`, lalu tekan Enter.

---

## 7. Langkah Memasukkan ke Git

Jalankan perintah dari folder utama repo `ABP`, bukan dari dalam folder `tugas-13`.

```bash
cd "C:\Users\Yesika Widiyani\OneDrive\Documents\ABP"
git status
git add "2311102195-YESIKA WIDIYANI-PERTEMUAN13/"
git status
git commit -m "Menambahkan Pertemuan 13 Yesika"
git push origin master
```

Jika push ditolak karena remote lebih baru, jalankan:

```bash
git pull --rebase origin master
git push origin master
```

Jangan menggunakan `git add .` apabila masih ada folder lain yang belum jelas statusnya.

---

## 8. Kesimpulan

Berdasarkan praktikum yang dilakukan, aplikasi Flutter berhasil menerapkan Provider sebagai state management dan local notification sebagai fitur pemberitahuan. Nilai counter dapat berubah secara reaktif ketika tombol tambah ditekan, dan aplikasi dapat memunculkan notifikasi berisi nilai counter terbaru. Dengan demikian, praktikum ini menunjukkan bahwa Provider dapat membantu pengelolaan state aplikasi menjadi lebih terstruktur, sedangkan local notification dapat digunakan untuk memberikan informasi langsung kepada pengguna.
