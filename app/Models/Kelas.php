<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $fillable = ['name'];

    // Relasi Many-to-Many dengan User
    public function siswa()
    {
        return $this->belongsToMany(User::class, 'siswa_kelas');
    }

    // Relasi One-to-Many dengan KodeKelas
    public function kodeKelas()
    {
        return $this->hasMany(KodeKelas::class);
    }

    // Relasi One-to-Many dengan Jadwal
    public function jadwal()
    {
        return $this->hasMany(Jadwal::class);
    }
}
