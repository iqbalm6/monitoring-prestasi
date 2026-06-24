@extends('layouts.admin')

@section('content')

<div class="card">

    <div class="card-header d-flex justify-content-between align-items-center">

        <h5 class="mb-0">

            Data Siswa Kelas
            {{ $kelas->nama_kelas }}

        </h5>

        <a
            href="{{ route('kelas.index') }}"
            class="btn btn-secondary btn-sm"
        >
            Kembali
        </a>

    </div>

    <div class="card-body">

        <table class="table table-hover">

            <thead>

                <tr>

                    <th>No</th>
                    <th>NIS</th>
                    <th>Nama Siswa</th>
                    <th>Jenis Kelamin</th>

                </tr>

            </thead>

            <tbody>

                @forelse($siswa as $item)

                    <tr>

                        <td>
                            {{ $loop->iteration }}
                        </td>

                        <td>
                            {{ $item->nis }}
                        </td>

                        <td>
                            {{ $item->nama }}
                        </td>

                        <td>
                            {{ $item->jenis_kelamin }}
                        </td>

                    </tr>

                @empty

                    <tr>

                        <td
                            colspan="4"
                            class="text-center"
                        >
                            Belum ada siswa
                        </td>

                    </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection