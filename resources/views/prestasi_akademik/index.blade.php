@extends('layouts.admin')

@section('content')

<div class="card shadow-sm border-0">

    <div class="card-header bg-white d-flex justify-content-between align-items-center">

        <h4 class="mb-0 fw-bold text-success">
            Prestasi Akademik
        </h4>

        <a href="{{ route('prestasi-akademik.pilih-kelas') }}"
           class="btn btn-primary">

            Tambah Nilai

        </a>

    </div>

    <div class="card-body">

        <table class="table table-hover">

            <thead class="table-light">

                <tr>

                    <th>No</th>
                    <th>Kelas</th>
                    <th>Jurusan</th>
                    <th>Jumlah Siswa</th>
                    <th width="150">
                        Aksi
                    </th>

                </tr>

            </thead>

            <tbody>

                @forelse($kelas as $item)

                <tr>

                    <td>
                        {{ $loop->iteration }}
                    </td>

                    <td>
                        {{ $item->nama_kelas }}
                    </td>

                    <td>
                        {{ $item->jurusan }}
                    </td>

                    <td>
                        {{ $item->siswa_count }}
                    </td>

                    <td>

                        <a
                            href="{{ route('prestasi-akademik.pilih-siswa',$item->id) }}"
                            class="btn btn-success btn-sm"
                        >
                            Lihat Siswa
                        </a>

                    </td>

                </tr>

                @empty

                <tr>

                    <td colspan="5" class="text-center">

                        Belum ada data kelas

                    </td>

                </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection