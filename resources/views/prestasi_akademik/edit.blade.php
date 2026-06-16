@extends('layouts.admin')

@section('content')

<h2>Edit Nilai Akademik</h2>

<form action="{{ route('prestasi-akademik.update',$prestasi->id) }}"
      method="POST">

    @csrf
    @method('PUT')

    <div class="mb-3">

        <label>Siswa</label>

        <input type="text"
               class="form-control"
               value="{{ $prestasi->siswa->nama }}"
               readonly>

    </div>

    <div class="mb-3">

        <label>Mata Pelajaran</label>

        <input type="text"
               class="form-control"
               value="{{ $prestasi->mataPelajaran->nama_mapel }}"
               readonly>

    </div>

    <div class="mb-3">

        <label>Tahun Ajaran</label>

        <input type="text"
               class="form-control"
               value="{{ $prestasi->tahunAjaran->tahun }}"
               readonly>

    </div>

    <div class="mb-3">

        <label>Semester</label>

        <input type="text"
               class="form-control"
               value="{{ $prestasi->semester }}"
               readonly>

    </div>

    <div class="mb-3">

        <label>Nilai</label>

        <input type="number"
               min="0"
               max="100"
               name="nilai"
               value="{{ $prestasi->nilai }}"
               class="form-control">

    </div>

    <button class="btn btn-primary">
        Update
    </button>

</form>

@endsection