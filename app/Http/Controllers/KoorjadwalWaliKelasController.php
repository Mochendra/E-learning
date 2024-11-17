<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KoorjadwalWaliKelasController extends Controller
{
    public function index()
    {
        // Ambil semua guru dengan role 'guru' dan 'koorjadwal' beserta relasi wali kelas
        $guru = User::with('waliKelas.kelas')->whereIn('role', ['guru', 'koorjadwal'])->get();

        // Ambil semua kelas
        $kelasList = Kelas::all();

        return view('koorjadwal.koorjadwal_wali_kelas', compact('guru', 'kelasList'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kelas_id' => 'required|exists:kelas,id',
            'guru_ids' => 'required|json', // expecting JSON string from the form
        ]);

        $kelasId = $request->input('kelas_id');
        $guruIds = json_decode($request->input('guru_ids')); // Decode JSON array

        // Lakukan pengelompokan guru ke kelas yang dipilih
        foreach ($guruIds as $guruId) {
            DB::table('wali_kelas')->updateOrInsert(
                ['guru_id' => $guruId, 'kelas_id' => $kelasId] // Pastikan ini adalah kolom yang benar
            );
        }

        return redirect()->back()->with('success', 'Pengelompokan wali kelas berhasil disimpan.');
    }
}
