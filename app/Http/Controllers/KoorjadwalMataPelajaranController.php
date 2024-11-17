<?php

namespace App\Http\Controllers;

use App\Models\MataPelajaran;
use Illuminate\Http\Request;
use App\Models\Semester;

class KoorjadwalMataPelajaranController extends Controller
{
    public function index()
    {
        $mataPelajaran = MataPelajaran::all();
        return view('koorjadwal.koorjadwal_tambah_pelajaran', 
            compact('mataPelajaran'));
    }
    
    public function store(Request $request)
    {
        \Log::info('Masuk ke method store');
        \Log::info('Request data:', $request->all());
    
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
            ]);
    
            $mataPelajaran = MataPelajaran::create($validated);
    
            \Log::info('Data berhasil disimpan:', $mataPelajaran->toArray());
    
            return response()->json(['success' => true, 'message' => 'Mata pelajaran berhasil ditambahkan']);
        } catch (\Exception $e) {
            \Log::error('Error: ' . $e->getMessage());
            return response()->json(['success' => false, 'message' => 'Terjadi kesalahan: ' . $e->getMessage()], 500);
        }
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:mata_pelajaran,name,'.$id,
        ]);

        $mataPelajaran = MataPelajaran::findOrFail($id);
        $mataPelajaran->update([
            'name' => $request->name,
        ]);

        return response()->json(['success' => true, 'message' => 'Mata pelajaran berhasil diupdate!']);
    }

    public function destroy($id)
    {
        $mataPelajaran = MataPelajaran::findOrFail($id);
        $mataPelajaran->delete();

        return response()->json(['success' => true, 'message' => 'Mata pelajaran berhasil dihapus!']);
    }
}