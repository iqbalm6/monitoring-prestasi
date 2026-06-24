@extends('layouts.admin')

@section('content')

<div class="card shadow-sm border-0">


<div class="card-header bg-white">

    <h4 class="mb-0 fw-bold text-success">
        Pilih Kelas
    </h4>

</div>

<div class="card-body">

    <table class="table table-hover">

        <thead class="table-light">

            <tr>

                <th>No</th>
                <th>Nama Kelas</th>
                <th>Jurusan</th>
                <th>Jumlah Siswa</th>
                <th>Aksi</th>

            </tr>

        </thead>

        <tbody>

            @foreach($kelas as $item)

            <tr>

                <td>{{ $loop->iteration }}</td>

                <td>{{ $item->nama_kelas }}</td>

                <td>{{ $item->jurusan }}</td>

                <td>{{ $item->siswa_count }}</td>

                <td>

                    <a
                        href="{{ route('prestasi-akademik.pilih-siswa',$item->id) }}"
                        class="btn btn-success btn-sm"
                    >
                        Pilih
                    </a>

                </td>

            </tr>

            @endforeach

        </tbody>

    </table>

</div>


</div>

@endsection
