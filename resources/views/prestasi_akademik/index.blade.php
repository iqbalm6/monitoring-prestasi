@extends('layouts.admin')

@section('content')

<div class="d-flex justify-content-between mb-3">

    <h2>Prestasi Akademik</h2>

    <a href="{{ route('prestasi-akademik.create') }}"
       class="btn btn-primary">

        Tambah Nilai

    </a>

</div>

<table class="table table-bordered">

    <thead>

        <tr>
            <th>No</th>
            <th>Siswa</th>
            <th>Mata Pelajaran</th>
            <th>Tahun Ajaran</th>
            <th>Semester</th>
            <th>Nilai</th>
            <th>Aksi</th>
        </tr>

    </thead>

    <tbody>

        @foreach($data as $item)

        <tr>

            <td>{{ $loop->iteration }}</td>

            <td>
                {{ $item->siswa->nama }}
            </td>

            <td>
                {{ $item->mataPelajaran->nama_mapel }}
            </td>

            <td>
                {{ $item->tahunAjaran->tahun }}
            </td>

            <td>
                {{ $item->semester }}
            </td>

            <td>
                {{ $item->nilai }}
            </td>

            <td>

                <a href="{{ route('prestasi-akademik.edit',$item->id) }}"
                   class="btn btn-warning btn-sm">
                    Edit
                </a>

                <form action="{{ route('prestasi-akademik.destroy',$item->id) }}"
                      method="POST"
                      style="display:inline">

                    @csrf
                    @method('DELETE')

                    <button class="btn btn-danger btn-sm">
                        Hapus
                    </button>

                </form>

            </td>

        </tr>

        @endforeach

    </tbody>

</table>

@endsection