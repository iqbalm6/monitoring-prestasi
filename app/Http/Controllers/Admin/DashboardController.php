<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Siswa;
use App\Models\User;
use App\Models\Kelas;
use App\Models\PrestasiAkademik;
use App\Models\PrestasiNonAkademik;

class DashboardController extends Controller
{
    public function index()
    {
        $totalSiswa = Siswa::count();

        $totalGuru = User::where('role', 'guru')->count();

        $grafikAkademik = PrestasiAkademik::selectRaw('siswa_id, AVG(nilai) as rata_nilai')
            ->with('siswa')
            ->groupBy('siswa_id')
            ->get();

        $grafikNonAkademik = PrestasiNonAkademik::selectRaw('siswa_id, COUNT(*) as total')
            ->with('siswa')
            ->groupBy('siswa_id')
            ->get();

        $totalKelas = Kelas::count();

        $totalPrestasi = PrestasiAkademik::count() + PrestasiNonAkademik::count();

        $topAkademik = PrestasiAkademik::selectRaw('siswa_id, AVG(nilai) as rata_nilai')
            ->with('siswa')
            ->groupBy('siswa_id')
            ->orderByDesc('rata_nilai')
            ->take(5)
            ->get();

        $totalOrangTua = User::where('role', 'orang_tua')->count();

        $totalPrestasiAkademik = PrestasiAkademik::count();

        $totalPrestasiNonAkademik = PrestasiNonAkademik::count();

        return view('dashboard.admin', compact(
            'totalSiswa',
            'totalGuru',
            'totalOrangTua',
            'totalKelas',
            'totalPrestasiAkademik',
            'totalPrestasiNonAkademik',
            'topAkademik',
            'grafikAkademik',
            'grafikNonAkademik'
        ));
    }
}
