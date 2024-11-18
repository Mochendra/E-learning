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
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        // Cek kredensial
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Jika berhasil, redirect ke dashboard
            $user = Auth::user();

            // Redirect berdasarkan role
            switch ($user->role) {
                case 'siswa':
                    return redirect()->intended('/dashboard_siswa');
                case 'admin':
                    return redirect()->intended('/dashboard_admin');
                case 'koorjadwal':
                    return redirect()->intended('/dashboard_koorjadwal');
                case 'guru':
                    return redirect()->intended('/dashboard_guru');
                default:
                    Auth::logout();
                    return redirect()->route('login')->with('error', 'Role tidak dikenali.');
            }
        }

        // Jika gagal, kembali dengan pesan error
        return back()->withErrors([
            'email' => 'Email atau Password salah.',
        ])->onlyInput('email');
    }

    /**
     * Handle logout.
     */
    public function logout(Request $request)
    {
        Auth::logout();
    
        $request->session()->invalidate();
        $request->session()->regenerateToken();
    
        return redirect('/login')->with('status', 'Anda telah berhasil logout.');
    }
    
}
