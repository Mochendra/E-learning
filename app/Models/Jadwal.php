<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $fillable = ['hari', 'jam_mulai', 'jam_selesai', 'guru_id', 'mata_pelajaran_id', 'kelas_id', 'kode_kelas_id'];

    // Relasi Many-to-One dengan User (Guru)
    public function guru()
    {
        return $this->belongsTo(User::class, 'guru_id');
    }

    // Relasi Many-to-One dengan MataPelajaran
    public function mataPelajaran()
    {
        return $this->belongsTo(MataPelajaran::class);
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

    // Relasi Many-to-One dengan Semester
    public function semester()
    {
        return $this->belongsTo(Semester::class);
    }
}
