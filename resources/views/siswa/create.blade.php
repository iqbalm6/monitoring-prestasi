@extends('layouts.admin')

@section('content')

<h2>Tambah Siswa</h2>

<form action="{{ route('siswa.store') }}"
      method="POST">

@csrf

<div class="mb-3">

<label>NIS</label>

<input type="text"
       name="nis"
       class="form-control">

</div>

<div class="mb-3">

<label>Nama</label>

<input type="text"
       name="nama"
       class="form-control">

</div>

<div class="mb-3">

<label>Jenis Kelamin</label>

<select name="jenis_kelamin"
        class="form-control">

    <option value="L">
        Laki-Laki
    </option>

    <option value="P">
        Perempuan
    </option>

</select>

</div>

<div class="mb-3">

<label>Alamat</label>

<textarea name="alamat"
          class="form-control"></textarea>

</div>

<div class="mb-3">

<label>Kelas</label>

<select name="kelas_id"
        class="form-control">

@foreach($kelas as $item)

<option value="{{ $item->id }}">
    {{ $item->nama_kelas }}
</option>

@endforeach

</select>

</div>

<div class="mb-3">

<label>Orang Tua</label>

<select name="orang_tua_id"
        class="form-control">

@foreach($orangTua as $item)

<option value="{{ $item->id }}">
    {{ $item->name }}
</option>

@endforeach

</select>

</div>

<button class="btn btn-primary">

    Simpan

</button>

</form>

@endsection