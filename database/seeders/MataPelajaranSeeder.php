<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MataPelajaranSeeder extends Seeder
{
    public function run(): void
    {
        $data = [

            ['nama_mapel' => 'Matematika', 'jurusan' => 'IPA'],
            ['nama_mapel' => 'Fisika', 'jurusan' => 'IPA'],
            ['nama_mapel' => 'Biologi', 'jurusan' => 'IPA'],
            ['nama_mapel' => 'Kimia', 'jurusan' => 'IPA'],
            ['nama_mapel' => 'IT', 'jurusan' => 'IPA'],
            ['nama_mapel' => 'Bahasa Inggris', 'jurusan' => 'IPA'],
            ['nama_mapel' => 'Bahasa Arab', 'jurusan' => 'IPA'],
            ['nama_mapel' => 'Bahasa Indonesia', 'jurusan' => 'IPA'],

            ['nama_mapel' => "Alqur'an Hadits", 'jurusan' => 'AGAMA'],
            ['nama_mapel' => 'SKI', 'jurusan' => 'AGAMA'],
            ['nama_mapel' => 'Tafsir', 'jurusan' => 'AGAMA'],
            ['nama_mapel' => 'Balaghah', 'jurusan' => 'AGAMA'],
            ['nama_mapel' => 'Bahasa Arab', 'jurusan' => 'AGAMA'],
            ['nama_mapel' => 'Ekonomi', 'jurusan' => 'AGAMA'],
            ['nama_mapel' => 'Sosiologi', 'jurusan' => 'AGAMA'],
            ['nama_mapel' => 'Bahasa Inggris', 'jurusan' => 'AGAMA'],
            ['nama_mapel' => 'Bahasa Indonesia', 'jurusan' => 'AGAMA'],
            ['nama_mapel' => 'Matematika', 'jurusan' => 'AGAMA'],
            ['nama_mapel' => 'Imla', 'jurusan' => 'AGAMA'],

        ];

        DB::table('mata_pelajaran')->insert($data);
    }
}