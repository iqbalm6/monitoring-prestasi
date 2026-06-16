@extends('layouts.admin')

@section('content')

<h2>Tambah Prestasi Non Akademik</h2>

<form action="{{ route('prestasi-non-akademik.store') }}"
      method="POST"
      enctype="multipart/form-data">

    @csrf

    <div class="mb-3">

        <label>Siswa</label>

        <select name="siswa_id"
                class="form-control">

            @foreach($siswaList as $item)

                <option value="{{ $item->id }}">
                    {{ $item->nama }}
                </option>

            @endforeach

        </select>

    </div>

    <div class="mb-3">

        <label>Nama Kegiatan</label>

        <input type="text"
               name="nama_kegiatan"
               class="form-control">

    </div>

    <div class="mb-3">

        <label>Tingkat</label>

        <select name="tingkat"
                class="form-control">

            <option>Sekolah</option>
            <option>Kecamatan</option>
            <option>Kabupaten</option>
            <option>Provinsi</option>
            <option>Nasional</option>
            <option>Internasional</option>

        </select>

    </div>

    <div class="mb-3">

        <label>Juara</label>

        <input type="text"
               name="juara"
               class="form-control"
               placeholder="Juara 1">

    </div>

    <div class="mb-3">

        <label>Tanggal</label>

        <input type="date"
               name="tanggal"
               class="form-control">

    </div>

    <div class="mb-3">

        <label>Sertifikat</label>

        <input type="file"
               name="sertifikat"
               class="form-control">

        <small>
            PDF, JPG, PNG
        </small>

    </div>

    <button class="btn btn-success">
        Simpan
    </button>

</form>

@endsection