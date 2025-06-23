<?php

namespace App\Models\PKM;

use Illuminate\Database\Eloquent\Model;

class SuratTugasPKM extends Model
{
    protected $table = 'PKM_Surat_Tugas_PKM';

    protected $fillable = ['judul', 'konten', 'tanggal_post'];

    public $timestamps = true;
}
