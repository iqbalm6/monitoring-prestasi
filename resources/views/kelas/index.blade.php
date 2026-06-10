@extends('layouts.admin')

@section('content')

<div class="d-flex justify-content-between mb-3">

    <h2>Data Kelas</h2>

    <a href="{{ route('kelas.create') }}"
       class="btn btn-primary">

        Tambah Kelas

    </a>

</div>

<table class="table table-bordered">

    <thead>

        <tr>

            <th>No</th>

            <th>Nama Kelas</th>

            <th>Aksi</th>

        </tr>

    </thead>

    <tbody>

        @forelse($kelas as $item)

        <tr>

            <td>{{ $loop->iteration }}</td>

            <td>{{ $item->nama_kelas }}</td>

            <td>

                <a href="{{ route('kelas.edit',$item->id) }}"
                   class="btn btn-warning btn-sm">

                    Edit

                </a>

                <form action="{{ route('kelas.destroy',$item->id) }}"
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

        @empty

        <tr>

            <td colspan="3"
                class="text-center">

                Belum Ada Data

            </td>

        </tr>

        @endforelse

    </tbody>

</table>

@endsection