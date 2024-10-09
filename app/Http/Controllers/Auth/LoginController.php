<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Show the login form.
     */
    public function showLoginForm()
    {
        return view('auth.login'); // Ganti dengan path view login Anda
    }

    /**
     * Handle the login attempt.
     */
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'nomor_induk' => 'required|string',
            'password' => 'required|string',
        ]);

        // Mencoba login
        if (Auth::attempt(['nomor_induk' => $request->nomor_induk, 'password' => $request->password])) {
            // Jika login berhasil, redirect ke halaman yang diinginkan
            return redirect()->intended('/dashboard'); // Ganti dengan rute dashboard Anda
        }

        // Jika login gagal, kembali ke form login dengan pesan error
        return redirect()->back()->withErrors([
            'nomor_induk' => 'Nomor induk atau kata sandi salah.',
        ])->withInput($request->only('nomor_induk'));
    }

    /**
     * Handle logout.
     */
    public function logout()
    {
        Auth::logout();
        return redirect('/login'); // Ganti dengan rute login Anda
    }
}
