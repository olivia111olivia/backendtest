<?php

namespace App\Models\PKM;

use Illuminate\Database\Eloquent\Model;

class HasilPenilaianProposal extends Model
{
    protected $table = 'PKM_Hasil_Penilaian_Proposal';

    protected $fillable = ['judul', 'konten', 'tanggal_post'];

    public $timestamps = true;
}
