<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataPelajaran extends Model
{
    protected $table = 'mata_pelajaran'; 
    protected $fillable = ['name'];
    // protected $table = 'mata_pelajaran'; // Pastikan nama tabel sesuai
    // protected $fillable = ['name', 'kode_kelas', 'semester_id']; // Sesuaikan dengan kolom di tabel

    // Relasi Many-to-One dengan Semester


    // Relasi One-to-Many dengan Jadwal
    public function jadwal()
    {
        return $this->hasMany(Jadwal::class);
    }
}
