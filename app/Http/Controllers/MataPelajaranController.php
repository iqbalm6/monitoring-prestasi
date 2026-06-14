<?php

namespace App\Http\Controllers;

use App\Models\MataPelajaran;
use Illuminate\Http\Request;

class MataPelajaranController extends Controller
{
    
    public function index()
{
    $data = MataPelajaran::orderBy('jurusan')
                ->orderBy('nama_mapel')
                ->get();

    return view(
        'mata_pelajaran.index',
        compact('data')
    );
}

    
    public function create()
    {
        return view('mata_pelajaran.create');
    }

    
    public function store(Request $request)
{
    $request->validate([
        'nama_mapel' => 'required',
        'jurusan' => 'required'
    ]);

    MataPelajaran::create([
        'nama_mapel' => $request->nama_mapel,
        'jurusan' => $request->jurusan
    ]);

    return redirect()
        ->route('mata-pelajaran.index');
}

    
    public function show(string $id)
    {
        //
    }

    
    public function edit(string $id)
{
    $mataPelajaran = MataPelajaran::findOrFail($id);

    return view(
        'mata_pelajaran.edit',
        compact('mataPelajaran')
    );
}

    
    public function update(Request $request, string $id)
{
    $request->validate([
        'nama_mapel' => 'required',
        'jurusan' => 'required'
    ]);

    $mataPelajaran = MataPelajaran::findOrFail($id);

    $mataPelajaran->update([
        'nama_mapel' => $request->nama_mapel,
        'jurusan' => $request->jurusan
    ]);

    return redirect()
        ->route('mata-pelajaran.index');
}

    
    public function destroy(string $id)
{
    MataPelajaran::findOrFail($id)
        ->delete();

    return redirect()
        ->route('mata-pelajaran.index');
}
}
