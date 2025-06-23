<?php

namespace App\Models\PKM;

use Illuminate\Database\Eloquent\Model;

class LaporanPKM extends Model
{
    protected $table = 'PKM_Laporan_PKM';

    protected $fillable = ['judul', 'konten', 'tanggal_post'];

    public $timestamps = true;
}
