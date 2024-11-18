<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilTugas extends Model
{
    protected $fillable = ['tugas_id', 'siswa_id', 'nilai_id', 'komentar'];

    // Relasi Many-to-One dengan Tugas
    public function tugas()
    {
        return $this->belongsTo(Tugas::class);
    }

    // Relasi Many-to-One dengan User (Siswa)
    public function siswa()
    {
        return $this->belongsTo(User::class, 'siswa_id');
    }

    // Relasi Many-to-One dengan Nilai
    public function nilai()
    {
        return $this->belongsTo(Nilai::class);
    }
}

