<?php

namespace App\Models\Jurnal;

use Illuminate\Database\Eloquent\Model;

class Teknois extends Model
{
    protected $table = 'Jurnal_Teknois';

    protected $fillable = ['judul', 'konten', 'tanggal_post'];

    public $timestamps = true;
}
