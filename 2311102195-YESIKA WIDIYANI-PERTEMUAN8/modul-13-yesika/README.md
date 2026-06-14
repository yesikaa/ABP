# LAPORAN PRAKTIKUM APLIKASI BERBASIS PLATFORM

## PERTEMUAN 8 - MODUL 13 AUTH, MIDDLEWARE, DAN RELASI

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

Modul ini membahas penerapan autentikasi, middleware, session, dan relasi database pada Laravel. Project ini terdiri dari `laravel-modul13` dan `tugas-8`.

---

## Alur Sistem

![Alur Modul 13](../docs/images/alur-modul13.png)

---

## Akun Login

Untuk project `laravel-modul13`, gunakan akun berikut:

```text
Email    : yesika@example.com
Password : password123
```

---

## Cara Menjalankan `laravel-modul13`

```bash
cd laravel-modul13
composer install
Copy-Item .env.example .env
php artisan key:generate
php artisan migrate:fresh --seed
php artisan serve --port=8001
```

Buka browser:

```text
http://127.0.0.1:8001
```

---

## Cara Menjalankan `tugas-8`

```bash
cd tugas-8
composer install
npm install
Copy-Item .env.example .env
php artisan key:generate
php artisan migrate:fresh --seed
```

Terminal pertama:

```bash
php artisan serve --port=8002
```

Terminal kedua:

```bash
npm run dev
```

Buka browser:

```text
http://127.0.0.1:8002
```

---

## Kesimpulan

Modul 13 berhasil menerapkan autentikasi dan middleware untuk membatasi akses halaman. Selain itu, project juga memperlihatkan bagaimana Laravel dapat digunakan untuk mengelola relasi data dan session pada aplikasi web.
