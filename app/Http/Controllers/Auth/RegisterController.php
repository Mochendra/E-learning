<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\DataGuru;
use App\Models\DataSiswa;

class RegisterController extends Controller
{
    // menampilkan form registrasi
    public function showRegistrationForm()
    {
        return view('auth.register');
    }
    public function register(Request $request)
    {
        $role = $request->role;

        // Validasi input
        $request->validate([
            'role' => 'required|in:siswa,guru',
            'nomor_induk' => $role === 'siswa' ? 'required|string' : 'nullable',
            'nip' => $role === 'guru' ? 'required|string' : 'nullable',
            'email' => 'required|email|unique:users,email', // Validasi email
            'no_whatsapp' => 'required|string|max:15', // Validasi no_whatsapp
            'password' => 'required|string|min:6',
        ]);

        // Ambil data berdasarkan role
        if ($role === 'siswa') {
            // Ambil data siswa berdasarkan nomor induk
            $siswa = DataSiswa::where('nomor_induk', $request->nomor_induk)->first();
        
            // Log data siswa untuk debugging
            \Log::info('Siswa Data:', (array) $siswa); // Pastikan data siswa tidak null
        
            if (!$siswa) {
                return redirect()->back()->withErrors(['nomor_induk' => 'Nomor induk tidak ditemukan']);
            }
        
            $userData = [
                'nomor_induk' => $siswa->nomor_induk, // Tambahkan nomor_induk
                'nama' => $siswa->nama, // Ambil nama dari data_siswa
                'email' => $request->email, // Ambil email dari input
                'no_whatsapp' => $request->no_whatsapp, // Ambil no_whatsapp dari input
                'role' => 'siswa',
                'password' => Hash::make($request->password),
            ];
        } elseif ($role === 'guru') {
            // Ambil data guru berdasarkan NIP
            $guru = DataGuru::where('nip', $request->nip)->first();
        
            // Log data guru untuk debugging
            \Log::info('Guru Data:', (array) $guru); // Pastikan data guru tidak null
        
            if (!$guru) {
                return redirect()->back()->withErrors(['nip' => 'NIP tidak ditemukan']);
            }
        
            $userData = [
                'nip' => $guru->nip, // Jika Anda ingin menyimpan NIP sebagai nomor_induk
                'nama' => $guru->nama, // Ambil nama dari data_guru
                'email' => $request->email, // Ambil email dari input
                'no_whatsapp' => $request->no_whatsapp, // Ambil no_whatsapp dari input
                'role' => 'guru',
                'password' => Hash::make($request->password),
            ];
        }

        // Log data pengguna yang akan disimpan
        \Log::info('User  Data to be Created:', $userData);

        // Buat pengguna di tabel users
        $user = User::create($userData); // Pastikan $userData memiliki 'nama', 'email', dan 'no_whatsapp'

        // Opsi untuk login dan redirect ke dashboard admin
        auth()->login($user);
        return redirect()->route('dashboard_admin')->with('success', 'Akun berhasil dibuat!');
    }
}
