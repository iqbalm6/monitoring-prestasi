@extends('layouts.admin')

@section('content')

<div class="d-flex justify-content-between mb-3">

    <h2>Prestasi Non Akademik</h2>

    <a href="{{ route('prestasi-non-akademik.create') }}"
       class="btn btn-primary">

        Tambah Prestasi

    </a>

</div>

<table class="table table-bordered">

    <thead>

        <tr>
            <th>No</th>
            <th>Siswa</th>
            <th>Kegiatan</th>
            <th>Tingkat</th>
            <th>Juara</th>
            <th>Tanggal</th>
            <th>Sertifikat</th>
            <th>Aksi</th>
        </tr>

    </thead>

    <tbody>

        @foreach($data as $item)

        <tr>

            <td>{{ $loop->iteration }}</td>

            <td>{{ $item->siswa->nama }}</td>

            <td>{{ $item->nama_kegiatan }}</td>

            <td>{{ $item->tingkat }}</td>

            <td>{{ $item->juara }}</td>

            <td>{{ $item->tanggal }}</td>

            <td>

                @if($item->sertifikat)

                    <a href="{{ asset('storage/'.$item->sertifikat) }}"
                    target="_blank"
                    class="btn btn-info btn-sm">

                        Lihat

                    </a>

                @else

                    -

                @endif

                </td>

                    <td>

            <a href="{{ route('prestasi-non-akademik.edit',$item->id) }}"
            class="btn btn-warning btn-sm">

                Edit

            </a>

            <form action="{{ route('prestasi-non-akademik.destroy',$item->id) }}"
                method="POST"
                style="display:inline"
                onsubmit="return confirm('Yakin ingin menghapus prestasi ini?')">

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