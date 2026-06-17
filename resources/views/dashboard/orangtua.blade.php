@extends('layouts.admin')

@section('content')

<h2 class="mb-4">
    Dashboard Orang Tua
</h2>

@foreach($anak as $item)

@php
    $rataRata = $item->prestasiAkademik->avg('nilai');
@endphp

<div class="card shadow-sm border-0 mb-4">

    <div class="card-header bg-white">

        <h3 class="mb-0">
            {{ $item->nama }}
        </h3>

        <small class="text-muted">
            Data Monitoring Prestasi Siswa
        </small>

    </div>

    <div class="card-body">

        <div class="row mb-4">

            <div class="col-md-4 mb-3">

                <div class="card border-0 shadow-sm">

                    <div class="card-body text-center">

                        <h6 class="text-muted">
                            NIS
                        </h6>

                        <h4>
                            {{ $item->nis }}
                        </h4>

                    </div>

                </div>

            </div>

            <div class="col-md-4 mb-3">

                <div class="card border-0 shadow-sm">

                    <div class="card-body text-center">

                        <h6 class="text-muted">
                            Kelas
                        </h6>

                        <h4>
                            {{ $item->kelas->nama_kelas }}
                        </h4>

                    </div>

                </div>

            </div>

            <div class="col-md-4 mb-3">

                <div class="card border-0 shadow-sm">

                    <div class="card-body text-center">

                        <h6 class="text-muted">
                            Jenis Kelamin
                        </h6>

                        <h4>
                            {{ $item->jenis_kelamin }}
                        </h4>

                    </div>

                </div>

            </div>

        </div>

        <h4 class="mb-3">
            📚 Prestasi Akademik
        </h4>

        <div class="alert alert-info">

            Rata-rata Nilai :

            <strong>
                {{ number_format($rataRata, 2) }}
            </strong>

        </div>

        <div class="table-responsive mb-4">

            <table class="table table-striped table-hover align-middle">

                <thead class="table-light">

                    <tr>
                        <th>Mata Pelajaran</th>
                        <th>Semester</th>
                        <th>Nilai</th>
                    </tr>

                </thead>

                <tbody>

                    @forelse($item->prestasiAkademik as $nilai)

                    <tr>

                        <td>
                            {{ $nilai->mataPelajaran->nama_mapel }}
                        </td>

                        <td>
                            Semester {{ $nilai->semester }}
                        </td>

                        <td>
                            {{ number_format($nilai->nilai, 2) }}
                        </td>

                    </tr>

                    @empty

                    <tr>

                        <td colspan="3" class="text-center">

                            Belum ada data prestasi akademik

                        </td>

                    </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

        <h4 class="mb-3">
            🏆 Prestasi Non Akademik
        </h4>

        <div class="table-responsive">

            <table class="table table-striped table-hover align-middle">

                <thead class="table-light">

                    <tr>
                        <th>Kegiatan</th>
                        <th>Tingkat</th>
                        <th>Juara</th>
                        <th>Sertifikat</th>
                    </tr>

                </thead>

                <tbody>

                    @forelse($item->prestasiNonAkademik as $prestasi)

                    <tr>

                        <td>
                            {{ $prestasi->nama_kegiatan }}
                        </td>

                        <td>
                            {{ $prestasi->tingkat }}
                        </td>

                        <td>

                            <span class="badge bg-success">

                                {{ $prestasi->juara }}

                            </span>

                        </td>

                        <td>

                            @if($prestasi->sertifikat)

                                <a href="{{ asset('storage/'.$prestasi->sertifikat) }}"
                                   target="_blank"
                                   class="btn btn-info btn-sm">

                                    Lihat

                                </a>

                            @else

                                -

                            @endif

                        </td>

                    </tr>

                    @empty

                    <tr>

                        <td colspan="4" class="text-center">

                            Belum ada data prestasi non akademik

                        </td>

                    </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

@endforeach

@endsection