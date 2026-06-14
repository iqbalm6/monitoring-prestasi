<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TahunAjaran;

class TahunAjaranController extends Controller
{
    
    public function index()
    {
        $data = TahunAjaran::all();

        return view(
            'tahun_ajaran.index',
            compact('data')
    );
    }   

    
    public function create()
    {
    return view('tahun_ajaran.create');
    }

    
    public function store(Request $request)
{
    $request->validate([
        'tahun' => 'required'
    ]);

    if ($request->aktif == 1) {

        TahunAjaran::query()
            ->update([
                'aktif' => 0
            ]);
    }

    TahunAjaran::create([
        'tahun' => $request->tahun,
        'aktif' => $request->aktif,
    ]);

    return redirect()
        ->route('tahun-ajaran.index');
}

    
    public function show(string $id)
    {
        //
    }

    
    public function edit(string $id)
    {
        $tahunAjaran = TahunAjaran::findOrFail($id);

        return view(
            'tahun_ajaran.edit',
            compact('tahunAjaran')
        );
    }

    
        public function update(Request $request, string $id)
    {
        $request->validate([
            'tahun' => 'required'
        ]);

        if ($request->aktif == 1) {

            TahunAjaran::query()
                ->update([
                    'aktif' => 0
                ]);
        }

        $tahunAjaran = TahunAjaran::findOrFail($id);

        $tahunAjaran->update([
            'tahun' => $request->tahun,
            'aktif' => $request->aktif
        ]);

        return redirect()
            ->route('tahun-ajaran.index');
    }

    
    public function destroy(string $id)
{
    TahunAjaran::findOrFail($id)
        ->delete();

    return redirect()
        ->route('tahun-ajaran.index');
}
}
