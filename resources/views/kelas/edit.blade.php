@extends('layouts.admin')

@section('content')

<div class="dashboard-hero">

    <h2>Edit Kelas</h2>

    <p class="mb-0">
        Perbarui data kelas
    </p>

</div>

<div class="card">

    <div class="card-header">

        Form Edit Kelas

    </div>

    <div class="card-body">

        <form
            action="{{ route('kelas.update',$kelas->id) }}"
            method="POST"
        >

            @csrf
            @method('PUT')

            <div class="mb-3">

                <label class="form-label">

                    Nama Kelas

                </label>

                <input
                    type="text"
                    name="nama_kelas"
                    class="form-control"
                    value="{{ $kelas->nama_kelas }}"
                    required
                >

            </div>

            <div class="mb-3">

                <label class="form-label">

                    Jurusan

                </label>

                <select
                    name="jurusan"
                    class="form-control"
                >

                    <option value="IPA"
                        {{ $kelas->jurusan == 'IPA' ? 'selected' : '' }}>
                        IPA
                    </option>

                    <option value="AG"
                        {{ $kelas->jurusan == 'AG' ? 'selected' : '' }}>
                        AG
                    </option>

                </select>

            </div>

            <div class="mb-4">

                <label class="form-label">

                    Wali Kelas

                </label>

                <select
                    name="wali_kelas_id"
                    class="form-control"
                >

                    <option value="">

                        -- Pilih Guru --

                    </option>

                    @foreach($guru as $item)

                    <option
                        value="{{ $item->id }}"
                        {{ $kelas->wali_kelas_id == $item->id ? 'selected' : '' }}
                    >

                        {{ $item->name }}

                    </option>

                    @endforeach

                </select>

            </div>

            <a href="{{ route('kelas.index') }}"
               class="btn btn-secondary">

                Kembali

            </a>

            <button class="btn btn-success">

                Update

            </button>

        </form>

    </div>

</div>

@endsection