<?php

namespace App\Http\Controllers\OrangTua;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $anak = auth()->user()
            ->siswa()
            ->with([
                'kelas',
                'prestasiAkademik.mataPelajaran',
                'prestasiAkademik.tahunAjaran',
                'prestasiNonAkademik'
            ])
            ->get();

        return view('dashboard.orangtua', compact('anak'));
    }
}
