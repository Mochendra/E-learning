<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataSiswa extends Model
{
    use HasFactory;

    protected $table = 'data_siswas'; 
    protected $fillable = ['nik', 'nomor_induk', 'nama', 'tanggal_lahir', 'jenis_kelamin'];
}
