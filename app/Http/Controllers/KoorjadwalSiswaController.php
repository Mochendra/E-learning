<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kelas;
use App\Models\SiswaKelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KoorjadwalSiswaController extends Controller
{
    public function index()
    {
          // Ambil semua siswa dengan role 'siswa' dan relasi ke SiswaKelas
    $siswa = User::with('siswaKelas.kelas')->where('role', 'siswa')->get();
        
        // Ambil semua kelas
        $kelasList = Kelas::all();
      
        return view('koorjadwal.koorjadwal_siswa', compact('siswa', 'kelasList'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kelas_id' => 'required|exists:kelas,id',
            'siswa_ids' => 'required|json', // expecting JSON string from the form
        ]);
    
        $kelasId = $request->input('kelas_id');
        $siswaIds = json_decode($request->input('siswa_ids')); // Decode JSON array
    
        // Lakukan pengelompokan siswa ke kelas yang dipilih
        foreach ($siswaIds as $siswaId) {
            // Contoh: Update atau simpan data pengelompokan ke database
            DB::table('siswa_kelas')->updateOrInsert(
                ['siswa_id' => $siswaId],
                ['kelas_id' => $kelasId]
            );
        }
    
        return redirect()->back()->with('success', 'Pengelompokan siswa berhasil disimpan.');
    }

    // public function destroy($id)
    // {
    //     // Temukan entri siswa_kelas berdasarkan ID
    //     $siswaKelas = SiswaKelas::findOrFail($id);

    //     // Hapus entri
    //     $siswaKelas->delete();

    //     // Redirect kembali dengan pesan sukses
    //     return redirect()->route('siswa_kelas.index')->with('success', 'Siswa berhasil dihapus dari kelas.');
    // }
}
