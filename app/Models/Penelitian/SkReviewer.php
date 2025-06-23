<?php

namespace App\Models\Penelitian;

use Illuminate\Database\Eloquent\Model;

class SkReviewer extends Model
{
    protected $table = 'Penelitian_SK_Reviewer';

    protected $fillable = ['judul', 'konten', 'tanggal_post'];

    public $timestamps = true;
}
