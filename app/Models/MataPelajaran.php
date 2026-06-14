<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MataPelajaran extends Model
{
    protected $table = 'mata_pelajaran';

    protected $fillable = [
        'nama_mapel',
        'jurusan'
    ];

    public function prestasiAkademik()
    {
        return $this->hasMany(
            PrestasiAkademik::class,
            'mata_pelajaran_id'
        );
    }
}