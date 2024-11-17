<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Semester;

class KoorJadwalController extends Controller
{
    public function tambahTahunAjar()
{
    $semesters = Semester::orderBy('tahun_ajaran', 'desc')->get();
    // Tambahkan logging untuk memastikan data diambil
    \Log::info('Semesters in controller:', $semesters->toArray());
    return view('koorjadwal.koorjadwal_tambah_tahun_ajar', compact('semesters'));
}

public function store(Request $request)
{
    $request->validate([
        'yearName' => 'required|string|max:9',
        'semester' => 'required|in:Ganjil,Genap',
    ]);

    // Cek jika kombinasi tahun ajaran dan semester sudah ada
    $exists = Semester::where('tahun_ajaran', $request->yearName)
                      ->where('name', $request->semester)
                      ->exists();

    if ($exists) {
        \Log::warning('Tahun Ajar dan Semester sudah ada:', [
            'year' => $request->yearName,
            'semester' => $request->semester,
        ]);
        return redirect()->route('koorjadwal.tambah_tahun_ajar')->with('error', 'Tahun Ajar dan Semester ini sudah ada!');
    }

    Semester::create([
        'tahun_ajaran' => $request->yearName,
        'name' => $request->semester,
    ]);

    return redirect()->route('koorjadwal.tambah_tahun_ajar')->with('success', 'Tahun Ajar berhasil ditambahkan!');
}


    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|in:Ganjil,Genap',
            'tahun_ajaran' => 'required|string|max:9'
        ]);

        $semester = Semester::findOrFail($id);
        $semester->update([
            'name' => $request->name,
            'tahun_ajaran' => $request->tahun_ajaran
        ]);

        return redirect()->route('koorjadwal.tambah_tahun_ajar')->with('success', 'Tahun ajar berhasil diperbarui');
    }

    public function destroy($id)
    {
        $semester = Semester::findOrFail($id);
        $semester->delete();

        return redirect()->route('koorjadwal.tambah_tahun_ajar')->with('success', 'Tahun ajar berhasil dihapus');
    }
}