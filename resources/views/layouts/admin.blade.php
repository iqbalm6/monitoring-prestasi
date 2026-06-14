<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])

    <title>Monitoring Prestasi</title>
        
</head>
<body>

<div class="container-fluid">

    <div class="row vh-100">

        <div class="col-md-2 bg-dark text-white p-3">

            <h4>Monitoring Prestasi</h4>

            <hr>

            <ul class="nav flex-column">

                <li class="nav-item">
                    <a href="/dashboard"
                       class="nav-link text-white">
                        Dashboard
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('kelas.index') }}"
                       class="nav-link text-white">
                        Kelas
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/tahun-ajaran"
                       class="nav-link text-white">
                        Tahun Ajaran
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('guru.index') }}"
                       class="nav-link text-white">
                        Guru
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('orang-tua.index') }}"
                       class="nav-link text-white">
                        Orang Tua
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('siswa.index') }}"
                       class="nav-link text-white">
                        Siswa
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('prestasi-akademik.index') }}"
                    class="nav-link text-white">
                        Prestasi Akademik
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#"
                       class="nav-link text-white">
                        Prestasi Non Akademik
                    </a>
                </li>

                <li class="nav-item">
                     <a href="{{ route('mata-pelajaran.index') }}"
                          class="nav-link text-white">
                          Mata Pelajaran
                     </a>
                </li>   

            </ul>

        </div>

        <div class="col-md-10">

            <nav class="navbar navbar-light bg-light shadow-sm">

    <div class="container-fluid">

        <span>
            {{ auth()->user()?->name ?? 'Administrator' }}
        </span>

        <form action="/keluar" method="POST">
            @csrf
            <button type="submit" class="btn btn-danger">
                Logout
            </button>
        </form>

    </div>

</nav>

            <div class="p-4">

                @yield('content')

            </div>

        </div>

    </div>

</div>

</body>
</html>