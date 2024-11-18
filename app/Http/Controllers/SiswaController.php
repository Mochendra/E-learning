<?php

namespace App\Http\Controllers;

use App\Models\DataSiswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{

    public function create()
    {
        // Tampilkan halaman tambah siswa
        return view('admin.tambah_siswa');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nik' => 'required|unique:data_siswas|max:20',
            'nama' => 'required|string|max:100',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
        ]);

        \Log::info('Request Data:', $request->all());

        DataSiswa::create($request->all());

        return redirect()->back()->with('success', 'Data siswa berhasil ditambahkan');
    }

    public function index() 
    {
        $siswa = DataSiswa::all();
        return view('admin.tambah_siswa', compact('siswa'));
    }

}
