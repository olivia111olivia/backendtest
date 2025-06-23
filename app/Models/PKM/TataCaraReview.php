<?php

namespace App\Models\PKM;

use Illuminate\Database\Eloquent\Model;

class TataCaraReview extends Model
{
    protected $table = 'PKM_Tata_cara_Review';

    protected $fillable = ['judul', 'konten', 'tanggal_post'];

    public $timestamps = true;
}
