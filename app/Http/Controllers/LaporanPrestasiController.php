<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\TahunAjaran;
use App\Models\PrestasiAkademik;
use App\Models\PrestasiNonAkademik;
use Barryvdh\DomPDF\Facade\Pdf;

class LaporanPrestasiController extends Controller
{
    public function index()
    {
        return view(
            'laporan_prestasi.index',
            [
                'siswaList' => Siswa::all(),
                'tahunAjaran' => TahunAjaran::all()
            ]
        );
    }

    public function tampilkan(Request $request)
    {
        $siswa = Siswa::findOrFail(
            $request->siswa_id
        );

        $akademik =
            PrestasiAkademik::with(
                'mataPelajaran'
            )
            ->where(
                'siswa_id',
                $request->siswa_id
            )
            ->where(
                'tahun_ajaran_id',
                $request->tahun_ajaran_id
            )
            ->get();

        $nonAkademik =
            PrestasiNonAkademik::where(
                'siswa_id',
                $request->siswa_id
            )
            ->get();

        return view(
            'laporan_prestasi.index',
            [
                'siswaList' => Siswa::all(),
                'tahunAjaran' => TahunAjaran::all(),
                'siswa' => $siswa,
                'akademik' => $akademik,
                'nonAkademik' => $nonAkademik,
                'tahunDipilih' => $request->tahun_ajaran_id
            ]
        );
    }

    public function pdf($siswaId, $tahunId)
        {
            $siswa = Siswa::with('kelas')
                ->findOrFail($siswaId);

            $akademik =
                PrestasiAkademik::with(
                    'mataPelajaran'
                )
                ->where(
                    'siswa_id',
                    $siswaId
                )
                ->where(
                    'tahun_ajaran_id',
                    $tahunId
                )
                ->get();

            $nonAkademik =
                PrestasiNonAkademik::where(
                    'siswa_id',
                    $siswaId
                )
                ->get();

            $pdf = Pdf::loadView(
                'laporan_prestasi.pdf',
                compact(
                    'siswa',
                    'akademik',
                    'nonAkademik'
                )
            );

            return $pdf->download(
                'laporan-prestasi-'.$siswa->nama.'.pdf'
            );
        }
}