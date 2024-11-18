<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\User;
use App\Models\MataPelajaran;
use App\Models\Kelas;
use App\Models\Semester;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class KoorjadwalJadwalController extends Controller
{
    public function index()
    {
        try {
            // Ambil data jadwal dengan relasi
            $jadwals = Jadwal::with(['mataPelajaran', 'kelas', 'semester', 'guruRelation'])->get();
    
            // Ambil data guru
            $gurus = User::where('role', 'guru')->get();
            Log::info('Gurus fetched: ', $gurus->toArray()); // Log the fetched gurus
            // dd($gurus); 
            // Ambil data kelas
            $kelas = Kelas::all();
            // Ambil data semester
            $semesters = Semester::all();
            Log::info('Semesters fetched: ', $semesters->toArray());
            // Ambil data mata pelajaran
            $mapels = MataPelajaran::all();
            Log::info('Mapels fetched: ', $mapels->toArray());
    
            // Cek status kosong
            $jadwalsEmpty = $jadwals->isEmpty();
            $gurusEmpty = $gurus->isEmpty();
            $kelasEmpty = $kelas->isEmpty();
            $semestersEmpty = $semesters->isEmpty();
            $mapelsEmpty = $mapels->isEmpty();
    
            Log::info('Gurus empty status: ', ['empty' => $gurusEmpty]); // Log the empty status
    
            // Kembalikan view dengan data
            return view('koorjadwal.dashboard_koorjadwal', [
                'jadwals' => $jadwals,
                'gurus' => $gurus,
                'kelas' => $kelas,
                'semesters' => $semesters,
                'mapels' => $mapels, // Pastikan $mapels ditambahkan
                'gurusEmpty' => $gurusEmpty,
                'kelasEmpty' => $kelasEmpty,
                'semestersEmpty' => $semestersEmpty,
                'jadwalsEmpty' => $jadwalsEmpty,
                'mapelsEmpty' => $mapelsEmpty,
            ]);
    
        } catch (\Exception $e) {
            Log::error('Error di KoorjadwalJadwalController: ' . $e->getMessage());
    
            // Kembalikan view dengan pesan error
            return view('koorjadwal.dashboard_koorjadwal')
                ->with('error', $e->getMessage())
                ->with('jadwalsEmpty', true)
                ->with('gurusEmpty', true)
                ->with('kelasEmpty', true)
                ->with('semestersEmpty', true)
                ->with('mapelsEmpty', true);
        }
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'guru_id' => 'required|exists:users,id',
            'mata_pelajaran_id' => 'required|exists:mata_pelajaran,id',
            'kelas_id' => 'required|exists:kelas,id',
            'semester_ganjil_id' => 'nullable|exists:semesters,id', // Ubah sesuai nama kolom di form
            'semester_genap_id' => 'nullable|exists:semesters,id', // Ubah sesuai nama kolom di form
            'hari' => 'required|in:Senin,Selasa,Rabu,Kamis,Jumat,Sabtu,Minggu',
            'jam_mulai_hour' => 'required|numeric|min:0|max:23',
            'jam_mulai_minute' => 'required|numeric|min:0|max:59',
            'jam_selesai_hour' => 'required|numeric|min:0|max:23',
            'jam_selesai_minute' => 'required|numeric|min:0|max:59',
        ]);
    
        try {
            // Simpan untuk semester ganjil jika dipilih
            if ($validatedData['semester_ganjil_id']) {
                $jadwalGanjil = new Jadwal();
                $jadwalGanjil->guru_id = $validatedData['guru_id'];
                $jadwalGanjil->mata_pelajaran_id = $validatedData['mata_pelajaran_id'];
                $jadwalGanjil->kelas_id = $validatedData['kelas_id'];
                $jadwalGanjil->semester_id = $validatedData['semester_ganjil_id'];
                $jadwalGanjil->hari = $validatedData['hari'];
                $jadwalGanjil->jam_mulai = $validatedData['jam_mulai_hour'] . ':' . $validatedData['jam_mulai_minute'];
                $jadwalGanjil->jam_selesai = $validatedData['jam_selesai_hour'] . ':' . $validatedData['jam_selesai_minute'];
                $jadwalGanjil->save();
            }
    
            // Simpan untuk semester genap jika dipilih
            if ($validatedData['semester_genap_id']) {
                $jadwalGenap = new Jadwal();
                $jadwalGenap->guru_id = $validatedData['guru_id'];
                $jadwalGenap->mata_pelajaran_id = $validatedData['mata_pelajaran_id'];
                $jadwalGenap->kelas_id = $validatedData['kelas_id'];
                $jadwalGenap->semester_id = $validatedData['semester_genap_id'];
                $jadwalGenap->hari = $validatedData['hari'];
                $jadwalGenap->jam_mulai = $validatedData['jam_mulai_hour'] . ':' . $validatedData['jam_mulai_minute'];
                $jadwalGenap->jam_selesai = $validatedData['jam_selesai_hour'] . ':' . $validatedData['jam_selesai_minute'];
                $jadwalGenap->save();
            }
    
            return response()->json([
                'success' => true,
                'message' => 'Jadwal berhasil ditambahkan'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal menyimpan jadwal: ' . $e->getMessage()
            ], 500);
        }
    }
}
