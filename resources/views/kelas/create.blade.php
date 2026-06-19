@extends('layouts.admin')

@section('content')

<div class="dashboard-hero">

    <h2>Tambah Kelas</h2>

    <p class="mb-0">
        Tambahkan data kelas baru
    </p>

</div>

<div class="card">

    <div class="card-header">

        Form Tambah Kelas

    </div>

    <div class="card-body">

        <form
            action="{{ route('kelas.store') }}"
            method="POST"
        >

            @csrf

            <div class="mb-3">

                <label class="form-label">

                    Nama Kelas

                </label>

                <input
                    type="text"
                    name="nama_kelas"
                    class="form-control"
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

                    <option value="IPA">

                        IPA

                    </option>

                    <option value="AG">

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

                    <option value="{{ $item->id }}">

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

                Simpan

            </button>

        </form>

    </div>

</div>

@endsection