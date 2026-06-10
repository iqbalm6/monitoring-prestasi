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

    <tr>

        <th>No</th>
        <th>Tahun</th>
        <th>Status</th>

    </tr>

    @foreach($data as $item)

    <tr>

        <td>{{ $loop->iteration }}</td>

        <td>{{ $item->tahun }}</td>

        <td>

            @if($item->aktif)

                Aktif

            @else

                Tidak Aktif

            @endif

        </td>

    </tr>

    @endforeach

</table>

@endsection