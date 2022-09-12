<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publikasi extends Model
{
    use HasFactory;
    protected $fillable = ['tanggal', 'nama_kegiatan', 'judul_flyer', 'link_pub_intern', 'link_pub_extern'];
}
