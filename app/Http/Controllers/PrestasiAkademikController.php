<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PrestasiAkademik;
use App\Models\Siswa;
use App\Models\MataPelajaran;
use App\Models\TahunAjaran;

class PrestasiAkademikController extends Controller
{

    public function index()
    {
        $data= PrestasiAkademik::with([
            'siswa',
            'mataPelajaran',
            'tahunAjaran'
        ])->get();

        return view('prestasi_akademik.index',
        compact('data'));
    }

    
    public function create()
    {
        return view(
            'prestasi_akademik.create',
            [
                'siswaList'   => Siswa::all(),
                'tahunAjaran' => TahunAjaran::all()
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
            'siswaList'     => Siswa::all(),
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
        //
    }

    
    public function edit(string $id)
    {
        //
    }

    
    public function update(Request $request, string $id)
    {
        //
    }

    
    public function destroy(string $id)
    {
        //
    }
}
