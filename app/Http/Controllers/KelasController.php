<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\User;

class KelasController extends Controller
{
    public function index()
{
    $kelas = Kelas::orderBy('jurusan')
        ->orderBy('nama_kelas')
        ->get();

    return view(
        'kelas.index',
        compact('kelas')
    );
}


    public function create()
    {
    $guru = User::where('role', 'guru')->get();

    return view('kelas.create', compact('guru'));
    }

    public function store(Request $request)
{
    $request->validate([
        'nama_kelas' => 'required'
    ]);

    Kelas::create([
    'nama_kelas' => $request->nama_kelas,
    'jurusan' => $request->jurusan,
    'wali_kelas_id' => $request->wali_kelas_id
]);

    return redirect()
        ->route('kelas.index')
        ->with('success', 'Data berhasil ditambahkan');
}

    
    public function show(string $id)
    {
        //
    }

    
    public function edit(Kelas $kelas)
{
    $guru = User::where(
        'role',
        'guru'
    )->get();

    return view(
        'kelas.edit',
        compact(
            'kelas',
            'guru'
        )
    );
}

    
    public function update(Request $request, Kelas $kelas)
{
    $request->validate([
        'nama_kelas' => 'required'
    ]);

    $kelas->update([
        'nama_kelas'    => $request->nama_kelas,
        'jurusan'       => $request->jurusan,
        'wali_kelas_id' => $request->wali_kelas_id
    ]);

    return redirect()
        ->route('kelas.index')
        ->with(
            'success',
            'Data berhasil diupdate'
        );
}

    
    public function destroy(Kelas $kelas)
{
    $kelas->delete();

    return redirect()
        ->route('kelas.index')
        ->with('success','Data berhasil dihapus');
}

public function siswa(Kelas $kelas)
{
    $siswa = \App\Models\Siswa::where(
        'kelas_id',
        $kelas->id
    )->get();

    return view(
        'kelas.siswa',
        compact(
            'kelas',
            'siswa'
        )
    );
}

}
