<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Schedule; // Contoh model untuk jadwal
use App\Models\Assignment; // Contoh model untuk tugas
use App\Models\Material; // Contoh model untuk materi

class DashboardController extends Controller
{
    public function index()
    {
        // Ambil pengguna yang sedang login
        $user = Auth::user();

        // Inisialisasi data yang akan dikirim ke view
        $data = [];

        // Mengambil data berdasarkan peran pengguna
        switch ($user->role) {
            case 'siswa':
                $data['schedules'] = Schedule::where('class_id', $user->class_id)->get(); // Jadwal untuk siswa
                $data['assignments'] = Assignment::where('student_id', $user->id)->get(); // Tugas untuk siswa
                break;
                
            case 'guru':
                $data['materials'] = Material::where('teacher_id', $user->id)->get(); // Materi untuk guru
                $data['assignments'] = Assignment::all(); // Semua tugas
                break;

            case 'admin':
                $data['users'] = User::all(); // Semua pengguna
                break;

            case 'koorjadwal':
                $data['schedules'] = Schedule::all(); // Semua jadwal
                break;
        }

        // Mengembalikan view dengan data yang relevan
        return view('dashboard.index', compact('user', 'data'));
    }
}
