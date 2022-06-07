<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $fillable = [
        'nisn',
        'nama',
        'alamat',
        'no_hp',
        'saldo',
        'kelas_id',
        'user_id',
    ];

    public function kelas(){
        return $this->belongsTo(Kelas::class);
    }
}
