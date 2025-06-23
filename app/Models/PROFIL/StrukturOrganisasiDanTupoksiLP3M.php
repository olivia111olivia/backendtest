<?php

namespace App\Models\PROFIL;

use Illuminate\Database\Eloquent\Model;

class StrukturOrganisasiDanTupoksiLP3M extends Model
{
    protected $table = 'PROFIL_Struktur_Organisasi_dan_Tupoksi_LP3M';

    protected $fillable = [
        'judul',
        'konten',
        'tanggal_post',
    ];

    public $timestamps = true;
}
