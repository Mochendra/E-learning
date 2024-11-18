<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;

    protected $table = 'materi';    

    protected $fillable = [
        'judul',
        'deskripsi',
        'file_path',
        'youtube_url',
        'minggu',
        'guru_id',
        'mata_pelajaran_id',
        'kelas_id',
    ];
}
