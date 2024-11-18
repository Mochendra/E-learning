<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User; // Make sure to import the User model
use App\Models\DataGuru;
use App\Models\DataSiswa;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::all(); // Ambil semua pengguna
        $siswa = DataSiswa::all(); // Ambil semua data siswa
        $guru = DataGuru::all(); // Ambil semua data guru

        return view('admin.dashboard_admin', compact('users', 'siswa', 'guru'));
    }
}
