<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    protected $fillable = ['tugas_id', 'nilai', 'catatan', 'guru_id'];

    // Relasi Many-to-One dengan User (Guru)
    public function guru()
    {
        return $this->belongsTo(User::class, 'guru_id');
    }

    // Relasi Many-to-One dengan Tugas
    public function tugas()
    {
        return $this->belongsTo(Tugas::class);
    }
}
