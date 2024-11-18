<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    protected $table = 'semesters';
    protected $fillable = [
        'name',
        'tahun_ajaran',
        'start_date',
        'end_date',
        'is_active'
    ];

    // Relasi One-to-Many dengan MataPelajaran
    public function mataPelajaran()
    {
        return $this->hasMany(MataPelajaran::class);
    }

    // Relasi One-to-Many dengan Jadwal
    public function jadwal()
    {
        return $this->hasMany(Jadwal::class);
    }
}
