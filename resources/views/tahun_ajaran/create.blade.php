@extends('layouts.admin')

@section('content')

<h2>Tambah Tahun Ajaran</h2>

<form action="{{ route('tahun-ajaran.store') }}"
      method="POST">

    @csrf

    <div class="mb-3">

        <label>Tahun Ajaran</label>

        <input type="text"
               name="tahun"
               class="form-control"
               placeholder="2025/2026"
               required>

    </div>

    <div class="mb-3">

        <label>Status</label>

        <select name="aktif"
                class="form-control">

            <option value="1">
                Aktif
            </option>

            <option value="0">
                Tidak Aktif
            </option>

        </select>

    </div>

    <button type="submit"
            class="btn btn-primary">
        Simpan
    </button>

</form>

@endsection