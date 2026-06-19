<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Monitoring Prestasi</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])

    <style>

        body{
            background:#f4f7f2;
            font-family:Arial, Helvetica, sans-serif;
        }

        .sidebar{
            background:#234d20;
            min-height:100vh;
            box-shadow:3px 0 15px rgba(0,0,0,.08);
        }

        .sidebar-title{
            font-weight:700;
            font-size:24px;
            color:white;
        }

        .sidebar .nav-link{
            color:#dfead9;
            padding:12px 15px;
            border-radius:10px;
            margin-bottom:5px;
            transition:.3s;
        }

        .sidebar .nav-link:hover{
            background:#2e6b1f;
            color:white;
        }

        .topbar{
            background:white;
            border-radius:15px;
            padding:15px 25px;
            box-shadow:0 3px 10px rgba(0,0,0,.05);
        }

        .content-wrapper{
            padding:25px;
        }

        .stat-card{
            border:none;
            border-radius:15px;
            box-shadow:0 5px 15px rgba(0,0,0,.08);
            transition:.3s;
        }

        .stat-card:hover{
            transform:translateY(-3px);
        }

        .dashboard-hero{
            background:linear-gradient(
                135deg,
                #2e6b1f,
                #4d9638
            );
            color:white;
            padding:25px;
            border-radius:18px;
            margin-bottom:25px;
            box-shadow:0 8px 20px rgba(0,0,0,.12);
        }

        .dashboard-hero h2{
            margin-bottom:5px;
            font-weight:700;
        }

        .card{
            border:none;
            border-radius:15px;
            box-shadow:0 4px 12px rgba(0,0,0,.08);
        }

        .card-header{
            background:#f8faf8;
            font-weight:600;
        }

    </style>

</head>
<body>

<div class="container-fluid">

    <div class="row vh-100">

        <div class="col-md-2 sidebar p-3">

            <h4 class="sidebar-title">
                EduTrack
            </h4>

            <small class="text-light">
                Monitoring Prestasi
            </small>

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
                    <a href="{{route('prestasi-non-akademik.index')}}"
                       class="nav-link text-white">
                        Prestasi Non Akademik
                    </a>
                </li>

                <li class="nav-item">

                    <a href="{{ route('laporan-prestasi.index') }}"
                        class="nav-link text-white">

                        Laporan Prestasi

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

            <nav class="topbar mb-4">

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

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</body>
</html>