<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllHexagonTables extends Migration
{
    public function up(): void
    {
        $tables = [
            'PROFIL_Visi_dan_Misi',
            'PROFIL_Struktur_Organisasi_dan_Tupoksi_LP3M',
            'Penelitian_Renstra_dan_Roadmap_Penelitian',
            'Penelitian_Penelitian_dan_Pengembangan_Peneliti',
            'Penelitian_Tata_cara_Review',
            'Penelitian_SK_Reviewer',
            'Penelitian_Hasil_Penilaian_Proposal',
            'Penelitian_Surat_Tugas_Penelitian',
            'Penelitian_Berita_Acara_dan_Monitoring_Evaluasi',
            'Penelitian_Laporan_Penelitian',
            'PKM_Renstra_dan_Roadmap_PKM',
            'PKM_Penelitian_dan_Pengembangan_Pelaksana',
            'PKM_Tata_cara_Review',
            'PKM_SK_Reviewer',
            'PKM_Hasil_Penilaian_Proposal',
            'PKM_Surat_Tugas_PKM',
            'PKM_Berita_Acara_dan_Monitoring_Evaluasi',
            'PKM_Laporan_PKM',
            'Jurnal_Teknois',
            'Jurnal_TAJB',
            'Jurnal_TMJB',
            'Jurnal_Jurnal_Kreatif',
            'Jurnal_Jurnal_Saintikom',
            'Jurnal_KIAT',
            'HKI_HKI_Dosen',
            'HKI_HKI_Mahasiswa',
        ];

        foreach ($tables as $table) {
            Schema::create($table, function (Blueprint $table) {
                $table->id();
                $table->string('judul');
                $table->text('konten');
                $table->date('tanggal_post');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        $tables = [
            'PROFIL_Visi_dan_Misi',
            'PROFIL_Struktur_Organisasi_dan_Tupoksi_LP3M',
            'Penelitian_Renstra_dan_Roadmap_Penelitian',
            'Penelitian_Penelitian_dan_Pengembangan_Peneliti',
            'Penelitian_Tata_cara_Review',
            'Penelitian_SK_Reviewer',
            'Penelitian_Hasil_Penilaian_Proposal',
            'Penelitian_Surat_Tugas_Penelitian',
            'Penelitian_Berita_Acara_dan_Monitoring_Evaluasi',
            'Penelitian_Laporan_Penelitian',
            'PKM_Renstra_dan_Roadmap_PKM',
            'PKM_Penelitian_dan_Pengembangan_Pelaksana',
            'PKM_Tata_cara_Review',
            'PKM_SK_Reviewer',
            'PKM_Hasil_Penilaian_Proposal',
            'PKM_Surat_Tugas_PKM',
            'PKM_Berita_Acara_dan_Monitoring_Evaluasi',
            'PKM_Laporan_PKM',
            'Jurnal_Teknois',
            'Jurnal_TAJB',
            'Jurnal_TMJB',
            'Jurnal_Jurnal_Kreatif',
            'Jurnal_Jurnal_Saintikom',
            'Jurnal_KIAT',
            'HKI_HKI_Dosen',
            'HKI_HKI_Mahasiswa',
        ];

        foreach ($tables as $table) {
            Schema::dropIfExists($table);
        }
    }
}
