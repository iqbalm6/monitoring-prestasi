@extends('layouts.admin')

@section('content')

<div class="card shadow-sm border-0">

```
<div class="card-header bg-white d-flex justify-content-between">

    <h4 class="mb-0 fw-bold text-success">

        Siswa {{ $kelas->nama_kelas }}

    </h4>

    <a
        href="{{ route('prestasi-akademik.pilih-kelas') }}"
        class="btn btn-secondary"
    >
        Kembali
    </a>

</div>

<div class="card-body">

    <table class="table table-hover">

        <thead class="table-light">

            <tr>

                <th>No</th>
                <th>NIS</th>
                <th>Nama</th>
                <th>Aksi</th>

            </tr>

        </thead>

        <tbody>

            @foreach($siswa as $item)

            <tr>

                <td>{{ $loop->iteration }}</td>

                <td>{{ $item->nis }}</td>

                <td>{{ $item->nama }}</td>

                <td>

                    <a
                        href="{{ route('prestasi-akademik.create') }}?siswa={{ $item->id }}"
                        class="btn btn-success btn-sm"
                    >
                        Input Nilai
                    </a>

                </td>

            </tr>

            @endforeach

        </tbody>

    </table>

</div>
```

</div>

@endsection
