<?php

namespace App\Http\Controllers;

use App\Models\DataGuru;
use Illuminate\Http\Request;

class GuruController extends Controller
{

    // public function create()
    // {
    //     // Tampilkan halaman tambah guru
    //     $guru = DataGuru::all();
    //     return view('admin.tambah_guru', compact('guru'));
    // }

    public function store(Request $request)
    {
        $request->validate([
            'nip' => 'required|unique:data_gurus|max:20',
            'nama' => 'required|string|max:100',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'tanggal_lahir' => 'required|date',
        ]);
    
        \Log::info('Request Data:', $request->all()); // Cek data yang diterima
    
        DataGuru::create($request->all());
    
        return redirect()->route('tambah_guru.index')->with('success', 'Data guru berhasil ditambahkan');
    }

    public function index()
{
    $guru = DataGuru::all(); // Mengambil semua data guru dari database
    return view('admin.tambah_guru', compact('guru')); // Mengirim data ke view
}

}
