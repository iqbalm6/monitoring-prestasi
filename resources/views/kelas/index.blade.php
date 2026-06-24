@extends('layouts.admin')

@section('content')

<div class="dashboard-hero">

    <h2>Data Kelas</h2>

    <p class="mb-0">
        Kelola seluruh data kelas siswa
    </p>

</div>

<div class="card mb-4">

    <div class="card-body d-flex justify-content-between align-items-center">

        <div>

            <h5 class="mb-1">
                Daftar Kelas
            </h5>

            <small class="text-muted">
                Data kelas yang terdaftar pada sistem
            </small>

        </div>

        <a href="{{ route('kelas.create') }}"
           class="btn btn-success">

            + Tambah Kelas

        </a>

    </div>

</div>

<div class="card">

    <div class="card-header">

        Data Kelas

    </div>

    <div class="card-body">

        <div class="table-responsive">

            <table class="table table-hover align-middle">

                <thead class="table-success">

                    <tr>
                        <th width="80">No</th>
                        <th>Nama Kelas</th>
                        <th>Jurusan</th>
                        <th>Wali Kelas</th>
                        <th width="140">Siswa</th>
                        <th width="180">Aksi</th>
                    </tr>

                </thead>

                <tbody>

                    @forelse($kelas as $item)

                    <tr>

    <td>{{ $loop->iteration }}</td>

    <td>{{ $item->nama_kelas }}</td>

    <td>{{ $item->jurusan }}</td>

    <td>{{ $item->waliKelas->name ?? '-' }}</td>

    <td>
        <a
            href="{{ route('kelas.siswa',$item->id) }}"
            class="btn btn-info btn-sm"
        >
            Lihat Siswa
        </a>
    </td>

    <td>

        <a
            href="{{ route('kelas.edit',$item->id) }}"
            class="btn btn-warning btn-sm"
        >
            Edit
        </a>

        <form
            action="{{ route('kelas.destroy',$item->id) }}"
            method="POST"
            class="d-inline"
        >
            @csrf
            @method('DELETE')

            <button
                class="btn btn-danger btn-sm"
                onclick="return confirm('Yakin ingin menghapus data ini?')"
            >
                Hapus
            </button>
        </form>

    </td>

</tr>

                    </tr>

                    @empty

                    <tr>

                        <td colspan="5" class="text-center">

                            Belum ada data kelas

                        </td>

                    </tr>

                    
                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection