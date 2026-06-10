<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Kelas extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_kelas',
        'wali_kelas_id'
    ];

    public function waliKelas()
    {
        return $this->belongsTo(User::class, 'wali_kelas_id');
    }
}