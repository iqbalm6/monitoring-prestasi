<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
{
    Schema::create('prestasi_non_akademik', function (Blueprint $table) {

        $table->id();

        $table->foreignId('siswa_id')
              ->constrained('siswa')
              ->cascadeOnDelete();

        $table->foreignId('tahun_ajaran_id')
              ->constrained('tahun_ajaran')
              ->cascadeOnDelete();

        $table->string('nama_prestasi');

        $table->string('tingkat');

        $table->string('peringkat');

        $table->date('tanggal');

        $table->string('bukti')
              ->nullable();

        $table->text('keterangan')
              ->nullable();

        $table->timestamps();
    });
}
};
