<?php

namespace App\Models\Jurnal;

use Illuminate\Database\Eloquent\Model;

class TMJB extends Model
{
    protected $table = 'Jurnal_TMJB';

    protected $fillable = ['judul', 'konten', 'tanggal_post'];

    public $timestamps = true;
}
