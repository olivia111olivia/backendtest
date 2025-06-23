<?php

namespace App\Models\PROFIL;

use Illuminate\Database\Eloquent\Model;

class VisiDanMisi extends Model
{
    protected $table = 'PROFIL_Visi_dan_Misi';

    protected $fillable = [
        'judul',
        'konten',
        'tanggal_post',
    ];

    public $timestamps = true;
}
