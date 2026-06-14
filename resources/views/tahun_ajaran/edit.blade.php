@extends('layouts.admin')

@section('content')

<h2>Edit Tahun Ajaran</h2>

<form action="{{ route('tahun-ajaran.update',$tahunAjaran->id) }}"
      method="POST">

    @csrf
    @method('PUT')

    <div class="mb-3">

        <label>Tahun Ajaran</label>

        <input type="text"
               name="tahun"
               class="form-control"
               value="{{ $tahunAjaran->tahun }}">

    </div>

    <div class="mb-3">

        <label>Status</label>

        <select name="aktif"
                class="form-control">

            <option value="1"
                {{ $tahunAjaran->aktif ? 'selected' : '' }}>

                Aktif

            </option>

            <option value="0"
                {{ !$tahunAjaran->aktif ? 'selected' : '' }}>

                Tidak Aktif

            </option>

        </select>

    </div>

    <button class="btn btn-primary">
        Update
    </button>

</form>

@endsection