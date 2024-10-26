<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JawabanQuiz extends Model
{
    protected $fillable = ['siswa_id', 'quiz_id', 'soal_quiz_id', 'jawaban_siswa', 'benar'];

    // Relasi Many-to-One dengan User (Siswa)
    public function siswa()
    {
        return $this->belongsTo(User::class, 'siswa_id');
    }

    // Relasi Many-to-One dengan Quiz
    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }

    // Relasi Many-to-One dengan SoalQuiz
    public function soalQuiz()
    {
        return $this->belongsTo(SoalQuiz::class);
    }
}
