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
        $request->validate([
            'nomor_induk' => 'required|string',
            'password' => 'required|string',
        ]);

        // Cek kredensial
        if (Auth::attempt(['nomor_induk' => $request->nomor_induk, 'password' => $request->password])) {
            // Jika berhasil, redirect ke dashboard
            return redirect()->intended('/dashboard_siswa'); // Ganti '/dashboard' sesuai dengan rute dashboard Anda
        }

        // Jika gagal, kembali dengan pesan error
        return back()->withErrors([
            'nomor_induk' => 'Nomor Induk atau Password salah.',
        ])->onlyInput('nomor_induk');
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
