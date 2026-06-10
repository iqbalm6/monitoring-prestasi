@extends('layouts.admin')

@section('content')

<h2>Edit Kelas</h2>

<form action="{{ route('kelas.update',$kelas->id) }}"
      method="POST">

    @csrf
    @method('PUT')

    <div class="mb-3">

        <label>Nama Kelas</label>

        <input type="text"
               name="nama_kelas"
               class="form-control"
               value="{{ $kelas->nama_kelas }}">

    </div>

    <button class="btn btn-warning">

        Update

    </button>

</form>

@endsection