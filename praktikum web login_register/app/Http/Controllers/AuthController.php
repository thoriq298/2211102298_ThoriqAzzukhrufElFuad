<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

/*
 * Nama: Thoriq Azzukruf El Fuad
 * NIM : 2211102298
 */

class AuthController extends Controller
{
    // 1. Menampilkan halaman login
    public function login()
    {
        return view('auth.login');
    }

    // 2. Menerima data login, autentikasi menggunakan Auth
    public function auth(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Jika login berhasil
            return redirect('/home');
        }

        // Jika gagal
        return redirect('/login')->with('error', 'Email atau password salah!');
    }

    // 3. Menampilkan halaman registrasi
    public function registration()
    {
        return view('auth.registration');
    }

    // 4. Menerima data registrasi dan menyimpan ke DB
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:6',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/registration')->with('success', 'Registrasi berhasil! Silakan login.');
    }

    // 5. Menampilkan halaman home (jika sudah login)
    public function home()
    {
        if (!Auth::check()) {
            return redirect('/login');
        }

        $user = Auth::user();
        return view('home', compact('user'));
    }

    // 6. Logout dan redirect ke login
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
