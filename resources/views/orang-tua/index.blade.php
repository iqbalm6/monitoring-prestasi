@extends('layouts.admin')

@section('content')

<div class="d-flex justify-content-between mb-3">

    <h2>Data Orang Tua</h2>

    <a href="{{ route('orang-tua.create') }}"
       class="btn btn-primary">

        Tambah Orang Tua

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

        @forelse($orangTua as $item)

        <tr>

            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->email }}</td>

            <td>

                <a href="{{ route('orang-tua.edit',$item->id) }}"
                   class="btn btn-warning btn-sm">

                    Edit

                </a>

                <form action="{{ route('orang-tua.destroy',$item->id) }}"
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

                Belum Ada Data Orang Tua

            </td>

        </tr>

        @endforelse

    </tbody>

</table>

@endsection