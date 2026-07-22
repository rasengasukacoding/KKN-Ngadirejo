<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Menampilkan halaman form login
    public function showLoginForm()
    {
        return view('admin.auth.login'); // Memanggil file resources/views/admin/auth/login.blade.php
    }

    // Proses validasi dan otentikasi login
    public function login(Request $request)
    {
        // Validasi input form
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Jika login berhasil
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            
            // Arahkan ke dashboard admin
            return redirect()->intended('/admin/dashboard'); 
        }

        // Jika login gagal, kembalikan ke form login dengan pesan error
        return back()->withErrors([
            'email' => 'Email atau password yang Anda masukkan salah.',
        ])->onlyInput('email');
    }

    // Proses logout
    public function logout(Request $request)
    {
        Auth::logout();
        
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        // Setelah logout admin diarahkan kembali ke beranda utama (guest)
        return redirect('/'); 
    }
}