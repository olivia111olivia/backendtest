<?php

namespace App\Models\Penelitian;

use Illuminate\Database\Eloquent\Model;

class PenelitianDanPengembanganPeneliti extends Model
{
    protected $table = 'Penelitian_Penelitian_dan_Pengembangan_Peneliti';

    protected $fillable = ['judul', 'konten', 'tanggal_post'];

    public $timestamps = true;
}
