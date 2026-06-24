<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PrestasiAkademik;
use App\Models\Siswa;
use App\Models\MataPelajaran;
use App\Models\TahunAjaran;
use App\Models\Kelas;

class PrestasiAkademikController extends Controller
{

    public function index()
    {
    $kelas = Kelas::withCount('siswa')
        ->orderBy('nama_kelas')
        ->get();

    return view(
        'prestasi_akademik.index',
        compact('kelas')
    );
    }

    public function pilihKelas()
    {
        $kelas = Kelas::withCount('siswa')
            ->orderBy('nama_kelas')
            ->get();

        return view(
            'prestasi_akademik.pilih_kelas',
            compact('kelas')
        );
    }

    public function pilihSiswa(Kelas $kelas)
    {
        $siswa = Siswa::where(
            'kelas_id',
            $kelas->id
        )->get();

        return view(
            'prestasi_akademik.pilih_siswa',
            compact(
                'kelas',
                'siswa'
            )
        );
    }

    public function create(Request $request)
{
    $siswaDipilih = Siswa::with('kelas')
        ->findOrFail($request->siswa);

    return view(
        'prestasi_akademik.create',
        [
            'siswaDipilih' => $siswaDipilih,
            'tahunAjaran'  => TahunAjaran::all()
        ]
    );
}

    public function tampilkanMapel(Request $request)
    {
        $siswa = Siswa::with('kelas')
            ->findOrFail($request->siswa_id);

        $jurusan = $siswa->kelas->jurusan;

        $mataPelajaran = MataPelajaran::where(
            'jurusan',
            $jurusan
        )->orderBy('nama_mapel')
            ->get();

        $tahunAjaran = TahunAjaran::all();

                return view(
            'prestasi_akademik.create',
            [
                'tahunAjaran'   => $tahunAjaran,
                'mataPelajaran' => $mataPelajaran,
                'siswaDipilih'  => $siswa,
                'semester'      => $request->semester,
                'tahunDipilih'  => $request->tahun_ajaran_id
            ]
        );
    } 

    public function store(Request $request)
    {
    $request->validate([
        'siswa_id' => 'required',
        'tahun_ajaran_id' => 'required',
        'semester' => 'required',
    ]);

    foreach ($request->nilai as $mapelId => $nilai) {

        if ($nilai === null || $nilai === '') {
            continue;
        }

        PrestasiAkademik::updateOrCreate(
            [
                'siswa_id' => $request->siswa_id,
                'mata_pelajaran_id' => $mapelId,
                'tahun_ajaran_id' => $request->tahun_ajaran_id,
                'semester' => $request->semester,
            ],
            [
                'nilai' => $nilai,
            ]
        );
    }

    return redirect()
        ->route('prestasi-akademik.index');
    }

    
    public function show(string $id)
    {
        
    }

    
    public function edit(string $id)
{
    $prestasi = PrestasiAkademik::with([
        'siswa',
        'mataPelajaran',
        'tahunAjaran'
    ])->findOrFail($id);

    return view(
        'prestasi_akademik.edit',
        compact('prestasi')
    );
}

    
    public function update(Request $request, string $id)
{
    $request->validate([
        'nilai' => 'required|numeric|min:0|max:100'
    ]);

    $prestasi = PrestasiAkademik::findOrFail($id);

    $prestasi->update([
        'nilai' => $request->nilai
    ]);

    return redirect()
        ->route('prestasi-akademik.index');
}

    
    public function destroy(string $id)
{
    PrestasiAkademik::findOrFail($id)
        ->delete();

    return redirect()
        ->route('prestasi-akademik.index');
}
}
