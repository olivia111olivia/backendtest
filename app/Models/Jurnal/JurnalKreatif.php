<?php

namespace App\Models\Jurnal;

use Illuminate\Database\Eloquent\Model;

class JurnalKreatif extends Model
{
    protected $table = 'Jurnal_Jurnal_Kreatif';

    protected $fillable = ['judul', 'konten', 'tanggal_post'];

    public $timestamps = true;
}
