@extends('layouts.admin')

@section('content')

<h2>Data Mata Pelajaran</h2>

<div class="mb-3 text-end">

    <a href="{{ route('mata-pelajaran.create') }}"
       class="btn btn-primary">
        Tambah Mata Pelajaran
    </a>

</div>

<table class="table table-bordered">

    <thead>
    <tr>
        <th>No</th>
        <th>Jurusan</th>
        <th>Mata Pelajaran</th>
        <th>Aksi</th>
    </tr>
</thead>

<tbody>

@foreach($data as $item)

<tr>

    <td>{{ $loop->iteration }}</td>
    <td>{{ $item->jurusan }}</td>
    <td>{{ $item->nama_mapel }}</td>

    <td>

        <a href="{{ route('mata-pelajaran.edit',$item->id) }}"
           class="btn btn-warning">
            Edit
        </a>

        <form action="{{ route('mata-pelajaran.destroy',$item->id) }}"
              method="POST"
              style="display:inline">

            @csrf
            @method('DELETE')

            <button class="btn btn-danger"
                    onclick="return confirm('Hapus data?')">
                Hapus
            </button>

        </form>

    </td>

</tr>

@endforeach

</tbody>

</table>

@endsection