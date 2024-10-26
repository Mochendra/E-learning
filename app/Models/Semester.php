<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    protected $fillable = ['name', 'tahun_ajaran'];

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
