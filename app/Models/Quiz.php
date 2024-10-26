<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $fillable = ['name', 'guru_id', 'kelas_id', 'kode_kelas_id', 'mata_pelajaran_id', 'deadline'];

    // Relasi Many-to-One dengan User (Guru)
    public function guru()
    {
        return $this->belongsTo(User::class, 'guru_id');
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

    // Relasi One-to-Many dengan SoalQuiz
    public function soalQuiz()
    {
        return $this->hasMany(SoalQuiz::class);
    }

    // Relasi One-to-Many dengan JawabanQuiz
    public function jawabanQuiz()
    {
        return $this->hasMany(JawabanQuiz::class);
    }
}
