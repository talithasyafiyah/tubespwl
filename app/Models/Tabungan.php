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
        'NISN',
        'kelas_id',
    ];
}
