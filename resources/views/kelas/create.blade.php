@extends('layouts.admin')

@section('content')

<h2>Tambah Kelas</h2>

<form action="{{ route('kelas.store') }}"
      method="POST">

    @csrf

    <div class="mb-3">

        <label>Nama Kelas</label>

        <input type="text"
               name="nama_kelas"
               class="form-control">

    </div>

    <button class="btn btn-primary">

        Simpan

    </button>

</form>

@endsection