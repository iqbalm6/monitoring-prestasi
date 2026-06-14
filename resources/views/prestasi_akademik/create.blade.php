@extends('layouts.admin')

@section('content')

<h2>Input Nilai Akademik</h2>

<form action="{{ route('prestasi-akademik.tampilkan-mapel') }}"
      method="POST">

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

        <label>Tahun Ajaran</label>

        <select name="tahun_ajaran_id"
                class="form-control">

            @foreach($tahunAjaran as $item)

                <option value="{{ $item->id }}">

                    {{ $item->tahun }}

                </option>

            @endforeach

        </select>

    </div>

    <div class="mb-3">

        <label>Semester</label>

        <select name="semester"
                class="form-control">

            <option value="1">
                Semester 1
            </option>

            <option value="2">
                Semester 2
            </option>

        </select>

    </div>

    <button class="btn btn-primary">

        Tampilkan Mata Pelajaran

    </button>

</form>

@if(isset($mataPelajaran))

<hr>

<h4>

    Siswa :
    {{ $siswaDipilih->nama }}

</h4>

<h5>

    Jurusan :
    {{ $siswaDipilih->kelas->jurusan }}

</h5>

<form action="{{ route('prestasi-akademik.store') }}"
      method="POST">

    @csrf

    <input type="hidden"
           name="siswa_id"
           value="{{ $siswaDipilih->id }}">

    <input type="hidden"
           name="tahun_ajaran_id"
           value="{{ $tahunDipilih }}">

    <input type="hidden"
           name="semester"
           value="{{ $semester }}">

    <table class="table table-bordered">

        <tr>

            <th>Mata Pelajaran</th>
            <th>Nilai</th>

        </tr>

        @foreach($mataPelajaran as $mapel)

        <tr>

            <td>

                {{ $mapel->nama_mapel }}

                <input type="hidden"
                       name="mapel_id[]"
                       value="{{ $mapel->id }}">

            </td>

            <td>

                <input type="number"
                       min="0"
                       max="100"
                       name="nilai[{{ $mapel->id }}]"
                       class="form-control">

            </td>

        </tr>

        @endforeach

    </table>

    <button class="btn btn-success">

        Simpan Semua Nilai

    </button>

</form>

@endif

@endsection