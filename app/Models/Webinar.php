<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Webinar extends Model
{
    use HasFactory;
    protected $fillable = [
        'tanggal',
        'nama_kegiatan',
        'bidang_penyelenggara',
        'jml_peserta',
        'link_sertifikat',
        'foto_kegiatan',
        'data_peserta'
    ];
}
