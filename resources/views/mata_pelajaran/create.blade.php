@extends('layouts.admin')

@section('content')

<h2>Tambah Mata Pelajaran</h2>

<form action="{{ route('mata-pelajaran.store') }}"
      method="POST">

    @csrf

    <div class="mb-3">

        <label>Jurusan</label>

        <select name="jurusan"
                class="form-control">

            <option value="IPA">
                IPA
            </option>

            <option value="AGAMA">
                AGAMA
            </option>

        </select>

    </div>

    <div class="mb-3">

        <label>Nama Mata Pelajaran</label>

        <input type="text"
               name="nama_mapel"
               class="form-control">

    </div>

    <button class="btn btn-primary">
        Simpan
    </button>

</form>

@endsection