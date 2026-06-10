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

    <div class="mb-3">

        <label>Jurusan</label>

        <select name="jurusan"
                class="form-control">

            <option value="IPA">
                IPA
            </option>

            <option value="AG">
                AG
            </option>

        </select>

    </div>

    <div class="mb-3">

        <label>Wali Kelas</label>

        <select name="wali_kelas_id"
                class="form-control">

            <option value="">
                -- Pilih Guru --
            </option>

            @foreach($guru as $item)

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