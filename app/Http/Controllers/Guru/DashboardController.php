<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use App\Models\Siswa;
use App\Models\Kelas;
use App\Models\PrestasiAkademik;
use App\Models\PrestasiNonAkademik;

class DashboardController extends Controller
{
    public function index()
    {
        $totalSiswa = Siswa::count();

        $totalKelas = Kelas::count();

        $totalPrestasiAkademik = PrestasiAkademik::count();

        $totalPrestasiNonAkademik = PrestasiNonAkademik::count();

        $nilaiTerbaru = PrestasiAkademik::with([
                'siswa',
                'mataPelajaran'
            ])
            ->latest()
            ->take(5)
            ->get();

        $prestasiTerbaru = PrestasiNonAkademik::with('siswa')
            ->latest()
            ->take(5)
            ->get();

        return view('dashboard.guru', compact(
            'totalSiswa',
            'totalKelas',
            'totalPrestasiAkademik',
            'totalPrestasiNonAkademik',
            'nilaiTerbaru',
            'prestasiTerbaru'
        ));
    }
}
