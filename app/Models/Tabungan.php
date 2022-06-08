<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tabungan extends Model
{
    protected $primaryKey = "tabungan_id";
    protected $table = "tabungans";
    protected $fillable = [
        'jlh_setoran',
        'tgl_setoran',
        'payment',
        'no_rekening',
        'nisn',
        'kelas_id',
    ];
    public $timestamps = false;

    public function kelas(){
        return $this->belongsTo(Kelas::class);
    }
    public function siswa(){
        return $this->belongsTo(Siswa::class);
    }

    public function user()
    {
       return $this->belongsTo(User::class);
    }
}
