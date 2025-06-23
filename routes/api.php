<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PROFIL\VisiDanMisiController;
use App\Http\Controllers\PROFIL\StrukturOrganisasiDanTupoksiLP3MController;

use App\Http\Controllers\PKM\RenstraDanRoadmapPKMController;
use App\Http\Controllers\PKM\PenelitianDanPengembanganPelaksanaController;
use App\Http\Controllers\PKM\TataCaraReviewController as PKMTataCaraReviewController;
use App\Http\Controllers\PKM\SkReviewerController as PKMSkReviewerController;
use App\Http\Controllers\PKM\HasilPenilaianProposalController as PKMHasilPenilaianProposalController;
use App\Http\Controllers\PKM\SuratTugasPKMController;
use App\Http\Controllers\PKM\BeritaAcaraDanMonitoringEvaluasiController as PKMBeritaAcaraController;
use App\Http\Controllers\PKM\LaporanPKMController;

use App\Http\Controllers\Penelitian\RenstraDanRoadmapPenelitianController;
use App\Http\Controllers\Penelitian\PenelitianDanPengembanganPenelitiController;
use App\Http\Controllers\Penelitian\TataCaraReviewController as PenelitianTataCaraReviewController;
use App\Http\Controllers\Penelitian\SkReviewerController as PenelitianSkReviewerController;
use App\Http\Controllers\Penelitian\HasilPenilaianProposalController as PenelitianHasilPenilaianProposalController;
use App\Http\Controllers\Penelitian\SuratTugasPenelitianController;
use App\Http\Controllers\Penelitian\BeritaAcaraDanMonitoringEvaluasiController as PenelitianBeritaAcaraController;
use App\Http\Controllers\Penelitian\LaporanPenelitianController;

use App\Http\Controllers\Jurnal\TeknoisController;
use App\Http\Controllers\Jurnal\TAJBController;
use App\Http\Controllers\Jurnal\TMJBController;
use App\Http\Controllers\Jurnal\JurnalKreatifController;
use App\Http\Controllers\Jurnal\JurnalSaintikomController;
use App\Http\Controllers\Jurnal\KIATController;

use App\Http\Controllers\HKI\HKIDosenController;
use App\Http\Controllers\HKI\HKIMahasiswaController;

Route::middleware('api')->get('/ping', function () {
    return response()->json([
        'success' => true,
        'message' => 'API aktif bro!'
    ]);
});

Route::prefix('profil')->group(function () {
    Route::apiResource('visi-dan-misi', VisiDanMisiController::class);
    Route::apiResource('struktur-lp3m', StrukturOrganisasiDanTupoksiLP3MController::class);
});

Route::prefix('pkm')->group(function () {
    Route::apiResource('renstra-roadmap', RenstraDanRoadmapPKMController::class);
    Route::apiResource('pengembangan-pelaksana', PenelitianDanPengembanganPelaksanaController::class);
    Route::apiResource('tatacara-review', PKMTataCaraReviewController::class);
    Route::apiResource('sk-reviewer', PKMSkReviewerController::class);
    Route::apiResource('hasil-penilaian', PKMHasilPenilaianProposalController::class);
    Route::apiResource('surat-tugas', SuratTugasPKMController::class);
    Route::apiResource('berita-acara', PKMBeritaAcaraController::class);
    Route::apiResource('laporan', LaporanPKMController::class);
});

Route::prefix('penelitian')->group(function () {
    Route::apiResource('renstra-roadmap', RenstraDanRoadmapPenelitianController::class);
    Route::apiResource('pengembangan-peneliti', PenelitianDanPengembanganPenelitiController::class);
    Route::apiResource('tatacara-review', PenelitianTataCaraReviewController::class);
    Route::apiResource('sk-reviewer', PenelitianSkReviewerController::class);
    Route::apiResource('hasil-penilaian-proposal', PenelitianHasilPenilaianProposalController::class);
    Route::apiResource('surat-tugas', SuratTugasPenelitianController::class);
    Route::apiResource('berita-acara', PenelitianBeritaAcaraController::class);
    Route::apiResource('laporan', LaporanPenelitianController::class);
});

Route::prefix('jurnal')->group(function () {
    Route::apiResource('teknois', TeknoisController::class);
    Route::apiResource('tajb', TAJBController::class);
    Route::apiResource('tmjb', TMJBController::class);
    Route::apiResource('jurnal-kreatif', JurnalKreatifController::class);
    Route::apiResource('jurnal-saintikom', JurnalSaintikomController::class);
    Route::apiResource('kiat', KIATController::class);
});

Route::prefix('hki')->group(function () {
    Route::apiResource('dosen', HKIDosenController::class);
    Route::apiResource('mahasiswa', HKIMahasiswaController::class);
});