<?php

namespace App\Models\HKI;

use Illuminate\Database\Eloquent\Model;

class HKIMahasiswa extends Model
{
    protected $table = 'HKI_HKI_Mahasiswa';

    protected $fillable = ['judul', 'konten', 'tanggal_post'];

    public $timestamps = true;
}
