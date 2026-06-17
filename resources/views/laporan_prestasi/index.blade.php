@extends('layouts.admin')

@section('content')

<h2 class="mb-4">
    Laporan Prestasi Siswa
</h2>

<form action="{{ route('laporan-prestasi.tampilkan') }}"
      method="POST">


@csrf

<div class="row">

    <div class="col-md-5">

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

    <div class="col-md-5">

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

    <div class="col-md-2">

        <label>&nbsp;</label>

        <button
            class="btn btn-primary w-100">

            Tampilkan

        </button>

    </div>

</div>


</form>

@if(isset($siswa))

<div class="mb-3">

            <a href="{{ route(
            'laporan-prestasi.pdf',
            [
                $siswa->id,
                $tahunDipilih
            ]
        ) }}"
        class="btn btn-danger">
            Cetak PDF
        </a>

</div>

<hr>

<div class="card mt-4">


<div class="card-body">

    <h4>{{ $siswa->nama }}</h4>

    <p>NIS : {{ $siswa->nis }}</p>

    <p>Kelas : {{ $siswa->kelas->nama_kelas }}</p>

</div>


</div>

<h4 class="mt-4">
    Prestasi Akademik
</h4>

<table class="table table-bordered">


<thead>

    <tr>
        <th>Mapel</th>
        <th>Semester</th>
        <th>Nilai</th>
    </tr>

</thead>

<tbody>

    @foreach($akademik as $item)

    <tr>

        <td>
            {{ $item->mataPelajaran->nama_mapel }}
        </td>

        <td>
            {{ $item->semester }}
        </td>

        <td>
            {{ $item->nilai }}
        </td>

    </tr>

    @endforeach

</tbody>


</table>

<h4 class="mt-4">
    Prestasi Non Akademik
</h4>

<table class="table table-bordered">


<thead>

    <tr>
        <th>Kegiatan</th>
        <th>Tingkat</th>
        <th>Juara</th>
    </tr>

</thead>

<tbody>

    @foreach($nonAkademik as $item)

    <tr>

        <td>
            {{ $item->nama_kegiatan }}
        </td>

        <td>
            {{ $item->tingkat }}
        </td>

        <td>
            {{ $item->juara }}
        </td>

    </tr>

    @endforeach

</tbody>


</table>

@endif

@endsection
