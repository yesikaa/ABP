<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // 1. Menampilkan halaman login
    public function login() {
        return view('login');
    }

    // 2. Cek data login ke DB
    public function auth(Request $request) {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Jika sukses, redirect ke home
            return redirect('/home');
        }
        
        // Jika gagal, balik ke login dengan pesan error
        return redirect('/login')->with('error', 'Email / password salah');
    }

    // 3. Menampilkan halaman registrasi
    public function registration() {
        return view('registration');
    }

    // 4. Simpan data user baru ke DB
    public function register(Request $request) {
        User::create([
            'name' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Password wajib di-hash
        ]);
        
        return redirect('/registration')->with('success', 'Registrasi berhasil');
    }

    // 5. Menampilkan halaman home
    public function home() {
        // Hanya bisa diakses jika sudah login
        if (Auth::check()) {
            return view('home');
        }
        return redirect('/login');
    }

    // 6. Logout user
    public function logout() {
        Auth::logout();
        return redirect('/login');
    }
}