<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    
    protected $primaryKey = "NISN";
    protected $table = "siswas";
    protected $fillable = [
        'NISN',
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

    public function tabungan(){
        return $this->hasOne(Tabungan::class);
    }
}
