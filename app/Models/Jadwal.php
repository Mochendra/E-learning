<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $table = 'jadwal';

    protected $fillable = [
        'mata_pelajaran_id',
        'kelas_id',
        'semester_id',
        'hari',
        'guru_id',
        'jam_mulai',
        'jam_selesai'
    ];

    // app/Models/Jadwal.php
    public function mataPelajaran()
    {
        return $this->belongsTo(MataPelajaran::class, 'mata_pelajaran_id', 'id');
    }


    // Relasi dengan kelas
    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id', 'id');
    }

    // Relasi dengan semester
    public function semester()
    {
        return $this->belongsTo(Semester::class, 'semester_id');
    }

    public function guruRelation()
    {
        return $this->belongsTo(User::class, 'guru_id', 'id');
    }

    public function guru()
{
    return $this->belongsTo(User::class, 'guru_id', 'id')->where('role', 'guru');
}
}
