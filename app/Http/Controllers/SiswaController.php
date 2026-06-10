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
        $siswa = Siswa::with([
            'kelas',
            'orangTua'
        ])->get();

        return view(
            'siswa.index',
            compact('siswa')
        );
    }

    
    public function create()
    {
        $kelas = Kelas::all();

        $orangTua = User::where(
            'role',
            'orang_tua'
        )->get();

        return view(
            'siswa.create',
            compact(
                'kelas',
                'orangTua'
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
