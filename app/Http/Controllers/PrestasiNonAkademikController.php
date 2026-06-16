<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PrestasiNonAkademik;
use App\Models\Siswa;
use Illuminate\Support\Facades\Storage;

class PrestasiNonAkademikController extends Controller
{
    public function index()
    {
        $data = PrestasiNonAkademik::with('siswa')
            ->get();

        return view(
            'prestasi_non_akademik.index',
            compact('data')
        );
    }

    
    public function create()
    {
        return view(
            'prestasi_non_akademik.create',
            [
                'siswaList' => Siswa::all()
            ]
        );
    }

    
    public function store(Request $request)
    {
    $request->validate([
        'siswa_id'      => 'required',
        'nama_kegiatan' => 'required',
        'tingkat'       => 'required',
        'juara'         => 'required',
        'tanggal'       => 'required',
        'sertifikat'    => 'nullable|mimes:pdf,jpg,jpeg,png|max:2048'
    ]);

    $filePath = null;

    if ($request->hasFile('sertifikat')) {

        $filePath = $request
            ->file('sertifikat')
            ->store(
                'sertifikat',
                'public'
            );
    }

    PrestasiNonAkademik::create([
        'siswa_id'      => $request->siswa_id,
        'nama_kegiatan' => $request->nama_kegiatan,
        'tingkat'       => $request->tingkat,
        'juara'         => $request->juara,
        'tanggal'       => $request->tanggal,
        'sertifikat'    => $filePath
    ]);

    return redirect()
        ->route('prestasi-non-akademik.index');
}

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
    $prestasi = PrestasiNonAkademik::findOrFail($id);

    return view(
        'prestasi_non_akademik.edit',
        [
            'prestasi' => $prestasi,
            'siswaList' => Siswa::all()
        ]
    );
    }

    public function update(Request $request, string $id)
    { 
        $request->validate([
    'siswa_id'      => 'required',
    'nama_kegiatan' => 'required',
    'tingkat'       => 'required',
    'juara'         => 'required',
    'tanggal'       => 'required',
    'sertifikat'    => 'nullable|mimes:pdf,jpg,jpeg,png|max:2048'
]);
    $prestasi = PrestasiNonAkademik::findOrFail($id);

    $filePath = $prestasi->sertifikat;

    if ($request->hasFile('sertifikat')) {

        if (
            $prestasi->sertifikat &&
            Storage::disk('public')->exists(
                $prestasi->sertifikat
            )
        ) {
            Storage::disk('public')
                ->delete($prestasi->sertifikat);
        }

        $filePath = $request
            ->file('sertifikat')
            ->store(
                'sertifikat',
                'public'
            );
    }

    $prestasi->update([
        'siswa_id' => $request->siswa_id,
        'nama_kegiatan' => $request->nama_kegiatan,
        'tingkat' => $request->tingkat,
        'juara' => $request->juara,
        'tanggal' => $request->tanggal,
        'sertifikat' => $filePath
    ]);

    return redirect()
        ->route('prestasi-non-akademik.index');
    }

    public function destroy(string $id)
    {
    $prestasi = PrestasiNonAkademik::findOrFail($id);

    if (
        $prestasi->sertifikat &&
        Storage::disk('public')->exists(
            $prestasi->sertifikat
        )
    ) {
        Storage::disk('public')
            ->delete($prestasi->sertifikat);
    }

    $prestasi->delete();

    return redirect()
        ->route('prestasi-non-akademik.index');
}
}
