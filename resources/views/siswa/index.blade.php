@extends('layouts.admin')

@section('content')

<div class="d-flex justify-content-between mb-3">

    <h2>Data Siswa</h2>

    <a href="{{ route('siswa.create') }}"
       class="btn btn-primary">

        Tambah Siswa

    </a>

</div>

<table class="table table-bordered">

<thead>

<tr>

    <th>NIS</th>
    <th>Nama</th>
    <th>Kelas</th>
    <th>Orang Tua</th>

</tr>

</thead>

<tbody>

@foreach($siswa as $item)

<tr>

    <td>{{ $item->nis }}</td>

    <td>{{ $item->nama }}</td>

    <td>
        {{ $item->kelas->nama_kelas ?? '-' }}
    </td>

    <td>
        {{ $item->orangTua->name ?? '-' }}
    </td>

</tr>

@endforeach

</tbody>

</table>

@endsection