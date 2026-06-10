@extends('layouts.admin')

@section('content')

<div class="d-flex justify-content-between mb-3">

    <h2>Data Guru</h2>

    <a href="{{ route('guru.create') }}"
       class="btn btn-primary">

        Tambah Guru

    </a>

</div>

<table class="table table-bordered">

    <thead>

        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>

    </thead>

    <tbody>

        @forelse($guru as $item)

        <tr>

            <td>{{ $loop->iteration }}</td>

            <td>{{ $item->name }}</td>

            <td>{{ $item->email }}</td>

            <td>

                <a href="{{ route('guru.edit',$item->id) }}"
                   class="btn btn-warning btn-sm">

                    Edit

                </a>

                <form action="{{ route('guru.destroy',$item->id) }}"
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

            <td colspan="4"
                class="text-center">

                Belum Ada Data Guru

            </td>

        </tr>

        @endforelse

    </tbody>

</table>

@endsection