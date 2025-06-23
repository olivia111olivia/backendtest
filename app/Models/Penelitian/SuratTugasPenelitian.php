<?php

namespace App\Models\Penelitian;

use Illuminate\Database\Eloquent\Model;

class SuratTugasPenelitian extends Model
{
    protected $table = 'Penelitian_Surat_Tugas_Penelitian';

    protected $fillable = ['judul', 'konten', 'tanggal_post'];

    public $timestamps = true;
}
