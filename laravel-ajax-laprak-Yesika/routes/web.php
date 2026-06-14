<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::get('/', [MahasiswaController::class, 'index'])->name('home');
Route::get('/data-mahasiswa', [MahasiswaController::class, 'getData'])->name('mahasiswa.data');
