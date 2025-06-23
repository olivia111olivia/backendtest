<?php

namespace App\Models\Jurnal;

use Illuminate\Database\Eloquent\Model;

class JurnalSaintikom extends Model
{
    protected $table = 'Jurnal_Jurnal_Saintikom';

    protected $fillable = ['judul', 'konten', 'tanggal_post'];

    public $timestamps = true;
}
