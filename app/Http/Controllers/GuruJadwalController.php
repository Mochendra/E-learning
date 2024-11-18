<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\Kelas;
use Illuminate\Http\Request;

class GuruJadwalController extends Controller
{
    public function index()
    {
        $jadwals = Jadwal::with(['guruRelation', 'mataPelajaran', 'kelas', 'semester'])->get();
        $jadwalsEmpty = $jadwals->isEmpty();

        return view('guru.dashboard_guru', compact('jadwals', 'jadwalsEmpty'));
    }

    public function kelasVII()
    {
        // Ambil data jadwal yang memiliki kelas_id yang sesuai dengan tingkat 7
        $jadwalKelasVII = Jadwal::whereHas('kelas', function ($query) {
            $query->where('tingkat', '7'); // Pastikan '7' sebagai string
        })
        ->with(['guruRelation', 'mataPelajaran', 'kelas', 'semester']) // Eager load relasi
        ->get();

        // Kirim data ke view
        return view('guru.kelas_VII', compact('jadwalKelasVII'));
    }

    public function mingguanKelasVII($kelas_id, $id)
    {
        // Get the schedule for the selected subject and class
        $jadwalKelasVII = Jadwal::whereHas('mataPelajaran', function ($query) use ($id) {
            $query->where('id', $id);
        })
        ->whereHas('kelas', function ($query) use ($kelas_id) {
            $query->where('id', $kelas_id);  // Filter berdasarkan kelas_id
        })
        ->with(['guruRelation', 'mataPelajaran', 'kelas', 'semester'])
        ->get();
    
        // Return the view with the filtered data
        return view('guru.materi_kelas_VII', compact('jadwalKelasVII', 'id', 'kelas_id'));
    }
    

    public function kelasVIII()
    {
        // Ambil data jadwal yang memiliki kelas_id yang sesuai dengan tingkat 7
        $jadwalKelasVIII = Jadwal::whereHas('kelas', function ($query) {
            $query->where('tingkat', '8'); // Pastikan '7' sebagai string
        })
            ->with(['guruRelation', 'mataPelajaran', 'kelas', 'semester']) // Eager load relasi
            ->get();

        // Kirim data ke view
        return view('guru.kelas_VIII', compact('jadwalKelasVIII'));
    }

    public function mingguanKelasVIII($kelas_id, $id)
    {
        // Get the schedule for the selected subject and class
        $jadwalKelasVIII = Jadwal::whereHas('mataPelajaran', function ($query) use ($id) {
            $query->where('id', $id);
        })
        ->whereHas('kelas', function ($query) use ($kelas_id) {
            $query->where('id', $kelas_id);  // Filter berdasarkan kelas_id
        })
        ->with(['guruRelation', 'mataPelajaran', 'kelas', 'semester'])
        ->get();
    
        // Return the view with the filtered data   
        return view('guru.materi_kelas_VIII', compact('jadwalKelasVIII', 'id', 'kelas_id'));
    }

    public function kelasIX()
    {
        // Ambil data jadwal yang memiliki kelas_id yang sesuai dengan tingkat 7
        $jadwalKelasIX = Jadwal::whereHas('kelas', function ($query) {
            $query->where('tingkat', '9'); // Pastikan '7' sebagai string
        })
            ->with(['guruRelation', 'mataPelajaran', 'kelas', 'semester']) // Eager load relasi
            ->get();

        // Kirim data ke view
        return view('guru.kelas_IX', compact('jadwalKelasIX'));
    }

    public function mingguanKelasIX($id)
    {
        // Get the schedule for the selected subject
        $jadwalKelasIX = Jadwal::whereHas('mataPelajaran', function ($query) use ($id) {
            $query->where('id', $id);
        })
            ->with(['guruRelation', 'mataPelajaran', 'kelas', 'semester']) // Eager load relations
            ->get();

        // Return the view with the filtered data
        return view('guru.materi_kelas_IX', compact('jadwalKelasIX', 'id'));
    }
}
