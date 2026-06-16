<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PrestasiNonAkademik extends Model
{
    protected $table = 'prestasi_non_akademik';

    protected $fillable = [
        'siswa_id',
        'nama_kegiatan',
        'tingkat',
        'juara',
        'tanggal',
        'sertifikat'
    ];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }
}