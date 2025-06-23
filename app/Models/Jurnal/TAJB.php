<?php

namespace App\Models\Jurnal;

use Illuminate\Database\Eloquent\Model;

class TAJB extends Model
{
    protected $table = 'Jurnal_TAJB';

    protected $fillable = ['judul', 'konten', 'tanggal_post'];

    public $timestamps = true;
}
