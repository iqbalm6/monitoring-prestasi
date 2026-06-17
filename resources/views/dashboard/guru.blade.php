@extends('layouts.admin')

@section('content')

<h2 class="mb-4">
    Dashboard Guru
</h2>

<div class="row">

    <div class="col-md-3 mb-3">

        <div class="card shadow-sm border-0">

            <div class="card-body">

                <h6>Total Siswa</h6>

                <h2>
                    {{ $totalSiswa }}
                </h2>

            </div>

        </div>

    </div>

    <div class="col-md-3 mb-3">

        <div class="card shadow-sm border-0">

            <div class="card-body">

                <h6>Total Kelas</h6>

                <h2>
                    {{ $totalKelas }}
                </h2>

            </div>

        </div>

    </div>

    <div class="col-md-3 mb-3">

        <div class="card shadow-sm border-0">

            <div class="card-body">

                <h6>Prestasi Akademik</h6>

                <h2>
                    {{ $totalPrestasiAkademik }}
                </h2>

            </div>

        </div>

    </div>

    <div class="col-md-3 mb-3">

        <div class="card shadow-sm border-0">

            <div class="card-body">

                <h6>Prestasi Non Akademik</h6>

                <h2>
                    {{ $totalPrestasiNonAkademik }}
                </h2>

            </div>

        </div>

    </div>

</div>

<hr>

<div class="card mb-4">

    <div class="card-header">

        <h5 class="mb-0">
            Nilai Akademik Terbaru
        </h5>

    </div>

    <div class="card-body">

        <table class="table table-bordered">

            <thead>

                <tr>
                    <th>Siswa</th>
                    <th>Mata Pelajaran</th>
                    <th>Nilai</th>
                </tr>

            </thead>

            <tbody>

                @foreach($nilaiTerbaru as $item)

                <tr>

                    <td>
                        {{ $item->siswa->nama }}
                    </td>

                    <td>
                        {{ $item->mataPelajaran->nama_mapel }}
                    </td>

                    <td>
                        {{ $item->nilai }}
                    </td>

                </tr>

                @endforeach

            </tbody>

        </table>

    </div>

</div>

<div class="card">

    <div class="card-header">

        <h5 class="mb-0">
            Prestasi Non Akademik Terbaru
        </h5>

    </div>

    <div class="card-body">

        <table class="table table-bordered">

            <thead>

                <tr>
                    <th>Siswa</th>
                    <th>Kegiatan</th>
                    <th>Juara</th>
                </tr>

            </thead>

            <tbody>

                @foreach($prestasiTerbaru as $item)

                <tr>

                    <td>
                        {{ $item->siswa->nama }}
                    </td>

                    <td>
                        {{ $item->nama_kegiatan }}
                    </td>

                    <td>
                        {{ $item->juara }}
                    </td>

                </tr>

                @endforeach

            </tbody>

        </table>

    </div>

</div>

@endsection