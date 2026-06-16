<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\User;
use App\Models\Kelas;
use App\Models\PrestasiAkademik;
use App\Models\PrestasiNonAkademik;

class DashboardController extends Controller
{
        public function index()
    {
        $role = auth()->user()->role;

        if ($role == 'admin')
        {
            $totalSiswa = Siswa::count();

            $totalGuru = User::where(
                'role',
                'guru'
            )->count();

            $totalOrangTua = User::where(
                'role',
                'orang_tua'
            )->count();

            $totalKelas = Kelas::count();

            $totalPrestasiAkademik =
                PrestasiAkademik::count();

            $totalPrestasiNonAkademik =
                PrestasiNonAkademik::count();

            return view(
                'dashboard.admin',
                compact(
                    'totalSiswa',
                    'totalGuru',
                    'totalOrangTua',
                    'totalKelas',
                    'totalPrestasiAkademik',
                    'totalPrestasiNonAkademik'
                )
            );
        }

        if ($role == 'guru')
        {
            return view('dashboard.guru');
        }

        return view('dashboard.orangtua');
    }
}