<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    Schema::create('prestasi_non_akademik', function (Blueprint $table) {

        $table->id();

        $table->foreignId('siswa_id')
              ->constrained('siswa')
              ->cascadeOnDelete();

        $table->string('nama_kegiatan');

        $table->string('tingkat');

        $table->string('juara');

        $table->date('tanggal');

        $table->string('sertifikat')
              ->nullable();

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prestasi_non_akademik');
    }
};
