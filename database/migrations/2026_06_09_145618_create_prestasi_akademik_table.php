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
    Schema::create('prestasi_akademik', function (Blueprint $table) {

        $table->id();

        $table->foreignId('siswa_id')
              ->constrained('siswa')
              ->cascadeOnDelete();

        $table->foreignId('mata_pelajaran_id')
              ->constrained('mata_pelajaran')
              ->cascadeOnDelete();

        $table->foreignId('tahun_ajaran_id')
              ->constrained('tahun_ajaran')
              ->cascadeOnDelete();

        $table->integer('semester');

        $table->decimal('nilai',5,2);

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prestasi_akademik');
    }
};
