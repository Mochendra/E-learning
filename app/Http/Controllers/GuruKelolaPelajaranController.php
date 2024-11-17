<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadwal;
use App\Models\Kelas;
use App\Models\Material;

class GuruKelolaPelajaranController extends Controller
{

    public function tambahMateri($id)
    {
        // Kirimkan ID ke view
        return view('guru.materi_kelas_VII_materi', ['id' => $id]);
    }

    public function showAddMaterialForm($kelas_id, $id)
    {
        // Mengirimkan id pelajaran dan kelas_id ke view
        return view('guru.materi_kelas_VII_materi', compact('id', 'kelas_id'));
    }

    public function storeMaterial(Request $request, $id)
    {
        $request->validate([
            'material_title' => 'required|string|max:255',
            'material_content' => 'required|string',
            'image_files.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'youtube_link' => 'nullable|url',
            'minggu' => 'required|integer',
            'mata_pelajaran_id' => 'required|exists:mata_pelajaran,id',
        ]);

        $material = new Material();
        $material->judul = $request->material_title;
        $material->deskripsi = $request->material_content;
        $material->youtube_url = $request->youtube_link;
        $material->minggu = $request->minggu;
        $material->guru_id = auth()->user()->id;
        $material->mata_pelajaran_id = $id;

        if ($request->hasFile('image_files')) {
            foreach ($request->file('image_files') as $file) {
                $path = $file->store('images', 'public');
                // Store image paths or perform additional processing as needed
            }
        }

        $material->save();

        return redirect()->back()->with('success', 'Materi berhasil ditambahkan!');
    }
}
