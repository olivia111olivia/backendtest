<?php

namespace App\Models\HKI;

use Illuminate\Database\Eloquent\Model;

class HKIDosen extends Model
{
    protected $table = 'HKI_HKI_Dosen';

    protected $fillable = ['judul', 'konten', 'tanggal_post'];

    public $timestamps = true;
}
