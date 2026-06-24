@extends('layouts.admin')

@section('content')

<div class="card shadow-sm border-0">

    <div class="card-header bg-white">

        <h4 class="mb-0 fw-bold text-success">

            Edit Data Siswa

        </h4>

    </div>

    <div class="card-body">

        <form
            action="{{ route('siswa.update',$siswa->id) }}"
            method="POST"
        >

            @csrf
            @method('PUT')

            <div class="mb-3">

                <label class="form-label">

                    NIS

                </label>

                <input
                    type="text"
                    name="nis"
                    class="form-control"
                    value="{{ $siswa->nis }}"
                    required
                >

            </div>

            <div class="mb-3">

                <label class="form-label">

                    Nama Siswa

                </label>

                <input
                    type="text"
                    name="nama"
                    class="form-control"
                    value="{{ $siswa->nama }}"
                    required
                >

            </div>

            <div class="mb-3">

                <label class="form-label">

                    Jenis Kelamin

                </label>

                <select
                    name="jenis_kelamin"
                    class="form-control"
                >

                    <option
                        value="L"
                        {{ $siswa->jenis_kelamin == 'L' ? 'selected' : '' }}
                    >
                        Laki-laki
                    </option>

                    <option
                        value="P"
                        {{ $siswa->jenis_kelamin == 'P' ? 'selected' : '' }}
                    >
                        Perempuan
                    </option>

                </select>

            </div>

            <div class="mb-3">

                <label class="form-label">

                    Alamat

                </label>

                <textarea
                    name="alamat"
                    class="form-control"
                    rows="3"
                >{{ $siswa->alamat }}</textarea>

            </div>

            <div class="mb-3">

                <label class="form-label">

                    Kelas

                </label>

                <select
                    name="kelas_id"
                    class="form-control"
                >

                    @foreach($kelas as $item)

                        <option
                            value="{{ $item->id }}"
                            {{ $siswa->kelas_id == $item->id ? 'selected' : '' }}
                        >

                            {{ $item->nama_kelas }}

                        </option>

                    @endforeach

                </select>

            </div>

            <div class="mb-4">

                <label class="form-label">

                    Orang Tua

                </label>

                <select
                    name="orang_tua_id"
                    class="form-control"
                >

                    <option value="">
                        -- Pilih Orang Tua --
                    </option>

                    @foreach($orangTua as $item)

                        <option
                            value="{{ $item->id }}"
                            {{ $siswa->orang_tua_id == $item->id ? 'selected' : '' }}
                        >

                            {{ $item->name }}

                        </option>

                    @endforeach

                </select>

            </div>

            <button
                type="submit"
                class="btn btn-success"
            >
                Update Data

            </button>

            <a
                href="{{ route('siswa.index') }}"
                class="btn btn-secondary"
            >
                Kembali
            </a>

        </form>

    </div>

</div>

@endsection