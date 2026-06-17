<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\PrestasiAkademik;
use App\Models\PrestasiNonAkademik;

class Siswa extends Model
{
    protected $table = 'siswa';

    protected $fillable = [
        'nis',
        'nama',
        'jenis_kelamin',
        'alamat',
        'kelas_id',
        'orang_tua_id'
    ];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }

    public function orangTua()
    {
        return $this->belongsTo(User::class, 'orang_tua_id');
    }

    public function prestasiAkademik()
    {
        return $this->hasMany(PrestasiAkademik::class);
    }

    public function prestasiNonAkademik()
    {
    return $this->hasMany(
        PrestasiNonAkademik::class
    );
    }
}