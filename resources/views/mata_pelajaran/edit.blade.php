@extends('layouts.admin')

@section('content')

<h2>Edit Mata Pelajaran</h2>

<form action="{{ route('mata-pelajaran.update',$mataPelajaran->id) }}"
      method="POST">

    @csrf
    @method('PUT')

    <div class="mb-3">

        <label>Jurusan</label>

        <select name="jurusan"
                class="form-control">

            <option value="IPA"
                {{ $mataPelajaran->jurusan == 'IPA' ? 'selected' : '' }}>
                IPA
            </option>

            <option value="AGAMA"
                {{ $mataPelajaran->jurusan == 'AGAMA' ? 'selected' : '' }}>
                AGAMA
            </option>

        </select>

    </div>

    <div class="mb-3">

        <label>Nama Mata Pelajaran</label>

        <input type="text"
               name="nama_mapel"
               class="form-control"
               value="{{ $mataPelajaran->nama_mapel }}">

    </div>

    <button class="btn btn-primary">
        Update
    </button>

</form>

@endsection