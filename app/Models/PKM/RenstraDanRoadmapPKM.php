<?php

namespace App\Models\PKM;

use Illuminate\Database\Eloquent\Model;

class RenstraDanRoadmapPKM extends Model
{
    protected $table = 'PKM_Renstra_dan_Roadmap_PKM';

    protected $fillable = ['judul', 'konten', 'tanggal_post'];

    public $timestamps = true;
}
