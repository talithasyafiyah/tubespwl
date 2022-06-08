<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $primaryKey = "kelas_id";
    protected $fillable = [
        'nama_kelas'
    ];

    public function siswas() {
        return $this->hasOne(Siswa::class);
    }
}
