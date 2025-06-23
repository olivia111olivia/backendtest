<?php

namespace App\Models\Penelitian;

use Illuminate\Database\Eloquent\Model;

class RenstraDanRoadmapPenelitian extends Model
{
    protected $table = 'Penelitian_Renstra_dan_Roadmap_Penelitian';

    protected $fillable = ['judul', 'konten', 'tanggal_post'];

    public $timestamps = true;
}
