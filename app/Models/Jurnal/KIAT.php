<?php

namespace App\Models\Jurnal;

use Illuminate\Database\Eloquent\Model;

class KIAT extends Model
{
    protected $table = 'Jurnal_KIAT';

    protected $fillable = ['judul', 'konten', 'tanggal_post'];

    public $timestamps = true;
}
