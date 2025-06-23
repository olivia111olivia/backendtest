<?php

namespace App\Models\Penelitian;

use Illuminate\Database\Eloquent\Model;

class HasilPenilaianProposal extends Model
{
    protected $table = 'Penelitian_Hasil_Penilaian_Proposal';

    protected $fillable = ['judul', 'konten', 'tanggal_post'];

    public $timestamps = true;
}
