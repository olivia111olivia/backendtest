<?php

namespace App\Models\PKM;

use Illuminate\Database\Eloquent\Model;

class PenelitianDanPengembanganPelaksana extends Model
{
    protected $table = 'PKM_Penelitian_dan_Pengembangan_Pelaksana';

    protected $fillable = ['judul', 'konten', 'tanggal_post'];

    public $timestamps = true;
}
