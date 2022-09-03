<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eservices extends Model
{
    use HasFactory;
    protected $fillable = [
        'tanggal',
        'nama_kegiatan',
        'jml_peserta',
        'jadwal',
        'data_peserta'
    ];
}
