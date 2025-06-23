<?php

namespace App\Models\PKM;

use Illuminate\Database\Eloquent\Model;

class BeritaAcaraDanMonitoringEvaluasi extends Model
{
    protected $table = 'PKM_Berita_Acara_dan_Monitoring_Evaluasi';

    protected $fillable = ['judul', 'konten', 'tanggal_post'];

    public $timestamps = true;
}
