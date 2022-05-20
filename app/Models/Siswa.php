<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $fillable = [
        'NISN',
        'nama',
        'alamat',
        'no_hp',
        'kelas_id',
        'user_id',
    ];
}
