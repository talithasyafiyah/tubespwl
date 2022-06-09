<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $primaryKey = "berita_id";
    protected $fillable = [
        'user_id',
        'judul',
        'konten',
        'tanggal',
        'image',
    ];
}
