@extends('layouts.admin')

@section('content')

<div class="card shadow-sm border-0">

<div class="card-header bg-white d-flex justify-content-between align-items-center">

    <div>

        <h4 class="mb-0 fw-bold text-success">
            Siswa {{ $kelas->nama_kelas }}
        </h4>

        <small>
            Jurusan {{ $kelas->jurusan }}
        </small>

    </div>

    <div>

        <a
            href="{{ route('siswa.create', ['kelas_id' => $kelas->id]) }}"
            class="btn btn-success"
        >
            + Tambah Siswa
        </a>

        <a
            href="{{ route('siswa.index') }}"
            class="btn btn-secondary"
        >
            Kembali
        </a>

    </div>

</div>

<div class="card-body">

    <table class="table table-hover">

        <thead class="table-light">

            <tr>

                <th>No</th>

                <th>NIS</th>

                <th>Nama</th>

                <th>Orang Tua</th>

                <th width="180">
                    Aksi
                </th>

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
                    {{ $item->orangTua->name ?? '-' }}
                </td>

                <td>

                    <a
                        href="{{ route('siswa.edit',$item->id) }}"
                        class="btn btn-warning btn-sm"
                    >
                        Edit
                    </a>

                    <form
                        action="{{ route('siswa.destroy',$item->id) }}"
                        method="POST"
                        class="d-inline"
                        onsubmit="return confirm('Yakin ingin menghapus data ini?')"
                    >

                        @csrf
                        @method('DELETE')

                        <button
                            class="btn btn-danger btn-sm"
                        >
                            Hapus
                        </button>

                    </form>

                </td>

            </tr>

            @empty

            <tr>

                <td colspan="5"
                    class="text-center">

                    Belum ada siswa

                </td>

            </tr>

            @endforelse

        </tbody>

    </table>

</div>

</div>

@endsection
