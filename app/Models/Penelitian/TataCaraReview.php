<?php

namespace App\Models\Penelitian;

use Illuminate\Database\Eloquent\Model;

class TataCaraReview extends Model
{
    protected $table = 'Penelitian_Tata_cara_Review';

    protected $fillable = ['judul', 'konten', 'tanggal_post'];

    public $timestamps = true;
}
