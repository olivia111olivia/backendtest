<?php

namespace App\Models\Penelitian;

use Illuminate\Database\Eloquent\Model;

class LaporanPenelitian extends Model
{
    protected $table = 'Penelitian_Laporan_Penelitian';

    protected $fillable = ['judul', 'konten', 'tanggal_post'];

    public $timestamps = true;
}
