@extends('layouts.admin')

@section('content')

<h2>Edit Prestasi Non Akademik</h2>

<form action="{{ route('prestasi-non-akademik.update',$prestasi->id) }}"
      method="POST"
      enctype="multipart/form-data">

    @csrf
    @method('PUT')

    <div class="mb-3">

        <label>Siswa</label>

        <select name="siswa_id"
                class="form-control">

            @foreach($siswaList as $item)

            <option value="{{ $item->id }}"
                {{ $prestasi->siswa_id == $item->id ? 'selected' : '' }}>

                {{ $item->nama }}

            </option>

            @endforeach

        </select>

    </div>

    <div class="mb-3">

        <label>Nama Kegiatan</label>

        <input type="text"
               name="nama_kegiatan"
               class="form-control"
               value="{{ $prestasi->nama_kegiatan }}">

    </div>

    <div class="mb-3">

        <label>Tingkat</label>

        <input type="text"
               name="tingkat"
               class="form-control"
               value="{{ $prestasi->tingkat }}">

    </div>

    <div class="mb-3">

        <label>Juara</label>

        <input type="text"
               name="juara"
               class="form-control"
               value="{{ $prestasi->juara }}">

    </div>

    <div class="mb-3">

        <label>Tanggal</label>

        <input type="date"
               name="tanggal"
               class="form-control"
               value="{{ $prestasi->tanggal }}">

    </div>

    <div class="mb-3">

        <label>Upload Sertifikat Baru</label>

        <input type="file"
               name="sertifikat"
               class="form-control">

    </div>

    <button class="btn btn-warning">
        Update
    </button>

</form>

@endsection