@extends('layouts.admin')

@section('content')

<div class="card shadow-sm border-0">

<div class="card-header bg-white">

    <h4 class="mb-0 fw-bold text-success">
        Daftar Kelas
    </h4>

</div>

<div class="card-body">

    <div class="table-responsive">

        <table class="table table-hover">

            <thead class="table-light">

                <tr>

                    <th>No</th>

                    <th>Nama Kelas</th>

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
                            href="{{ route('siswa.kelas',$item->id) }}"
                            class="btn btn-success btn-sm"
                        >
                            Lihat Siswa
                        </a>

                    </td>

                </tr>

                @empty

                <tr>

                    <td colspan="5"
                        class="text-center">

                        Belum ada data kelas

                    </td>

                </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

</div>

@endsection
