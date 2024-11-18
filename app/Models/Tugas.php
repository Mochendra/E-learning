<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tugas extends Model
{
    protected $fillable = ['name', 'kelas_id', 'kode_kelas_id', 'mata_pelajaran_id', 'siswa_id', 'file_path', 'deadline'];

    // Relasi Many-to-One dengan User (Siswa)
    public function siswa()
    {
        return $this->belongsTo(User::class, 'siswa_id');
    }

    // Relasi Many-to-One dengan Kelas
    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }

    // Relasi Many-to-One dengan KodeKelas
    public function kodeKelas()
    {
        return $this->belongsTo(KodeKelas::class);
    }
}
