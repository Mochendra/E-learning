<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;

class KoorjadwalKelasController extends Controller
{
    public function index()
    {
        $kelas = Kelas::all(); // Ambil semua kelas dari database
        return view('koorjadwal.koorjadwal_tambah_kelas', compact('kelas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'classLevel' => 'required|integer|in:7,8,9',
            'classCode' => 'required|string|max:1|in:A,B,C,D,E,F,G,H,I,J,K,L,M,N,O,P,Q,R,S,T,U,V,W,X,Y,Z',
        ]);

        Kelas::create([
            'tingkat' => $request->classLevel,
            'kode_kelas' => $request->classCode,
        ]);

        return redirect()->route('koorjadwal.tambah_kelas')->with('success', 'Kelas berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $kelas = Kelas::findOrFail($id);
        return response()->json($kelas);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'classLevel' => 'required|integer|in:7,8,9',
            'classCode' => 'required|string|max:1|in:A,B,C,D,E,F,G,H,I,J,K,L,M,N,O,P,Q,R,S,T,U,V,W,X,Y,Z',
        ]);

        $kelas = Kelas::findOrFail($id);
        $kelas->update([
            'tingkat_kelas' => $request->classLevel,
            'kode_kelas' => $request->classCode,
        ]);

        return response()->json(['success' => true, 'message' => 'Kelas berhasil diupdate!']);
    }

    public function destroy($id)
    {
        $kelas = Kelas::findOrFail($id);
        $kelas->delete();

        return response()->json(['success' => true, 'message' => 'Kelas berhasil dihapus!']);
    }
}
