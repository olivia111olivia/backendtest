<?php

namespace App\Models\PKM;

use Illuminate\Database\Eloquent\Model;

class SkReviewer extends Model
{
    protected $table = 'PKM_SK_Reviewer';

    protected $fillable = ['judul', 'konten', 'tanggal_post'];

    public $timestamps = true;
}
