@extends('layouts.admin')

@section('content')

<div class="d-flex justify-content-between mb-3">

    <h2>Data Tahun Ajaran</h2>

    <a href="{{ route('tahun-ajaran.create') }}"
       class="btn btn-primary">

        Tambah Tahun Ajaran

    </a>

</div>

<table class="table table-bordered">

    <thead>
<tr>
    <th>No</th>
    <th>Tahun</th>
    <th>Status</th>
    <th>Aksi</th>
</tr>
</thead>

<tbody>

@foreach($data as $item)

<tr>

    <td>{{ $loop->iteration }}</td>

    <td>{{ $item->tahun }}</td>

    <td>

        @if($item->aktif)

            <span class="badge bg-success">
                Aktif
            </span>

        @else

            <span class="badge bg-secondary">
                Tidak Aktif
            </span>

        @endif

    </td>

    <td>

        <a href="{{ route('tahun-ajaran.edit',$item->id) }}"
           class="btn btn-warning">
            Edit
        </a>

        <form action="{{ route('tahun-ajaran.destroy',$item->id) }}"
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

@endsection