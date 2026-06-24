<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Kelas;
use App\Models\User;

class SiswaController extends Controller
{
    public function index()
{
    $kelas = Kelas::withCount('siswa')
        ->orderBy('nama_kelas')
        ->get();

    return view(
        'siswa.index',
        compact('kelas')
    );
}

    public function create(Request $request)
    {
        $kelas = Kelas::all();

        $kelasDipilih = $request->kelas_id;

        $orangTua = User::where(
        'role',
        'orang_tua'
    )->get();

    return view(
        'siswa.create',
        compact(
            'kelas',
            'orangTua',
            'kelasDipilih'
        )
    );
    }

    public function store(Request $request)
    {
        $request->validate([
            'nis' => 'required|unique:siswa,nis',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'kelas_id' => 'required',
        ]);

        Siswa::create([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'kelas_id' => $request->kelas_id,
            'orang_tua_id' => $request->orang_tua_id,
        ]);

        return redirect()
            ->route('siswa.index');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $siswa = Siswa::findOrFail($id);

        $kelas = Kelas::all();

        $orangTua = User::where(
            'role',
            'orang_tua'
        )->get();

        return view(
            'siswa.edit',
            compact(
                'siswa',
                'kelas',
                'orangTua'
            )
        );
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'kelas_id' => 'required'
        ]);

        $siswa = Siswa::findOrFail($id);

        $siswa->update([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'kelas_id' => $request->kelas_id,
            'orang_tua_id' => $request->orang_tua_id
        ]);

        return redirect()
            ->route('siswa.index')
            ->with(
                'success',
                'Data siswa berhasil diperbarui'
            );
    }

    public function destroy(string $id)
    {
        $siswa = Siswa::findOrFail($id);

        $siswa->delete();

        return redirect()
            ->route('siswa.index')
            ->with(
                'success',
                'Data siswa berhasil dihapus'
            );
    }

    public function kelas(Kelas $kelas)
{
    $siswa = Siswa::with('orangTua')
        ->where(
            'kelas_id',
            $kelas->id
        )
        ->get();

    return view(
        'siswa.kelas',
        compact(
            'kelas',
            'siswa'
        )
    );
}
}
