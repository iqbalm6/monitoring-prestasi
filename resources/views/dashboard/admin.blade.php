@extends('layouts.admin')

@section('content')

<h2 class="mb-4">
    Dashboard Admin
</h2>

<div class="row">

    <div class="col-md-4 mb-3">

        <div class="card shadow-sm border-0">

            <div class="card-body">

                <h6>Total Siswa</h6>

                <h2>
                    {{ $totalSiswa }}
                </h2>

            </div>

        </div>

    </div>

    <div class="col-md-4 mb-3">

        <div class="card shadow-sm border-0">

            <div class="card-body">

                <h6>Total Guru</h6>

                <h2>
                    {{ $totalGuru }}
                </h2>

            </div>

        </div>

    </div>

    <div class="col-md-4 mb-3">

        <div class="card shadow-sm border-0">

            <div class="card-body">

                <h6>Total Orang Tua</h6>

                <h2>
                    {{ $totalOrangTua }}
                </h2>

            </div>

        </div>

    </div>

</div>

<div class="row">

    <div class="col-md-4 mb-3">

        <div class="card shadow-sm border-0">

            <div class="card-body">

                <h6>Total Kelas</h6>

                <h2>
                    {{ $totalKelas }}
                </h2>

            </div>

        </div>

    </div>

    <div class="col-md-4 mb-3">

        <div class="card shadow-sm border-0">

            <div class="card-body">

                <h6>Prestasi Akademik</h6>

                <h2>
                    {{ $totalPrestasiAkademik }}
                </h2>

            </div>

        </div>

    </div>

    <div class="col-md-4 mb-3">

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

@endsection