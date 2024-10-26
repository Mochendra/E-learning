<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataPelajaran extends Model
{
    protected $fillable = ['name', 'semester_id'];

    // Relasi Many-to-One dengan Semester
    public function semester()
    {
        return $this->belongsTo(Semester::class);
    }

    // Relasi One-to-Many dengan Jadwal
    public function jadwal()
    {
        return $this->hasMany(Jadwal::class);
    }
}
