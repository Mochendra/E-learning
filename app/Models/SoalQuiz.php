<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoalQuiz extends Model
{
    protected $fillable = ['quiz_id', 'pertanyaan', 'pilihan_a', 'pilihan_b', 'pilihan_c', 'pilihan_d', 'jawaban_benar'];

    // Relasi Many-to-One dengan Quiz
    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }

    // Relasi One-to-Many dengan JawabanQuiz
    public function jawabanQuiz()
    {
        return $this->hasMany(JawabanQuiz::class);
    }
}
