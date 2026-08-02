<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>EduTrack</title>

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

        /* =======================
            Sidebar
        ======================== */

        .sidebar{
            background:#234d20;
            min-height:100vh;
            padding:25px;
        }

        .sidebar-title{
            color:white;
            font-size:34px;
            font-weight:700;
        }

        .sidebar small{
            color:#d9e5d3;
        }

        .sidebar .nav-link{
            color:white;
            border-radius:12px;
            padding:12px 15px;
            margin-bottom:6px;
            transition:.25s;
        }

        .sidebar .nav-link:hover{
            background:#2e6b1f;
        }

        .sidebar .nav-link.active{
            background:#2e6b1f;
            font-weight:bold;
        }

        .offcanvas.sidebar{
            background:#234d20;
            color:white;
        }

        .offcanvas.sidebar .nav-link{
            color:#dfead9;
            padding:12px 15px;
            border-radius:10px;
            margin-bottom:5px;
        }

        .offcanvas.sidebar .nav-link:hover{
            background:#2e6b1f;
            color:white;
        }

        .offcanvas.sidebar .nav-link.active{
            background:#2e6b1f;
            color:white;
            font-weight:700;
        }

        /* =======================
            Content
        ======================== */

        .main-content{
            padding:25px;
        }

        .topbar{
            background:white;
            border-radius:15px;
            padding:18px 25px;
            box-shadow:0 5px 15px rgba(0,0,0,.08);
            margin-bottom:25px;
        }

        .dashboard-hero{
            background:linear-gradient(135deg,#2e6b1f,#4d9638);
            color:white;
            border-radius:18px;
            padding:25px;
            margin-bottom:25px;
        }

        .card{
            border:none;
            border-radius:15px;
            box-shadow:0 4px 15px rgba(0,0,0,.08);
        }

        .card-header{
            background:#f7faf6;
            font-weight:600;
        }

        /* =======================
            Mobile
        ======================== */

        @media(max-width:991px){

            .main-content{
                padding:15px;
            }

            .topbar{
                padding:15px;
            }

        }

    </style>

</head>

<body>

<!-- ================= MOBILE SIDEBAR ================= -->

<div
    class="offcanvas offcanvas-start sidebar"
    tabindex="-1"
    id="mobileSidebar">

    <div class="offcanvas-header">

    <div>

        <h4 class="sidebar-title mb-0">
            EduTrack
        </h4>

        <small class="text-light">
            Monitoring Prestasi
        </small>

    </div>

    <button
        class="btn-close btn-close-white"
        data-bs-dismiss="offcanvas">
    </button>

</div>

<hr class="text-light">

    <div class="offcanvas-body">

        <ul class="nav flex-column">

            <li class="nav-item">
                <a href="/dashboard"
                   class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}">
                    Dashboard
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('kelas.index') }}"
                   class="nav-link {{ request()->is('kelas*') ? 'active' : '' }}">
                    Kelas
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('tahun-ajaran.index') }}"
                   class="nav-link {{ request()->routeIs('tahun-ajaran.*') ? 'active' : '' }}">
                    Tahun Ajaran
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('guru.index') }}"
                   class="nav-link {{ request()->routeIs('guru.*') ? 'active' : '' }}">
                    Guru
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('orang-tua.index') }}"
                   class="nav-link {{ request()->routeIs('orang-tua.*') ? 'active' : '' }}">
                    Orang Tua
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('siswa.index') }}"
                   class="nav-link {{ request()->routeIs('siswa.*') ? 'active' : '' }}">
                    Siswa
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('prestasi-akademik.index') }}"
                   class="nav-link {{ request()->routeIs('prestasi-akademik.*') ? 'active' : '' }}">
                    Prestasi Akademik
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('prestasi-non-akademik.index') }}"
                   class="nav-link {{ request()->routeIs('prestasi-non-akademik.*') ? 'active' : '' }}">
                    Prestasi Non Akademik
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('laporan-prestasi.index') }}"
                   class="nav-link {{ request()->routeIs('laporan-prestasi.*') ? 'active' : '' }}">
                    Laporan Prestasi
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('mata-pelajaran.index') }}"
                   class="nav-link {{ request()->routeIs('mata-pelajaran.*') ? 'active' : '' }}">
                    Mata Pelajaran
                </a>
            </li>

        </ul>

    </div>

</div>

<div class="container-fluid">

    <div class="row g-0">

        <!-- Sidebar Desktop -->

        <aside class="col-lg-2 d-none d-lg-block sidebar">

            <h3 class="sidebar-title">

                EduTrack

            </h3>

            <small>

                Monitoring Prestasi

            </small>

            <hr class="text-light">

            <ul class="nav flex-column">

                <li class="nav-item">
                    <a href="/dashboard" class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}">
                        Dashboard
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('kelas.index') }}" class="nav-link {{ request()->is('kelas*') ? 'active' : '' }}">
                        Kelas
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('tahun-ajaran.index') }}" class="nav-link {{ request()->routeIs('tahun-ajaran.*') ? 'active' : '' }}">
                        Tahun Ajaran
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('guru.index') }}" class="nav-link {{ request()->routeIs('guru.*') ? 'active' : '' }}">
                        Guru
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('orang-tua.index') }}" class="nav-link {{ request()->routeIs('orang-tua.*') ? 'active' : '' }}">
                        Orang Tua
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('siswa.index') }}" class="nav-link {{ request()->routeIs('siswa.*') ? 'active' : '' }}">
                        Siswa
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('prestasi-akademik.index') }}" class="nav-link {{ request()->routeIs('prestasi-akademik.*') ? 'active' : '' }}">
                        Prestasi Akademik
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('prestasi-non-akademik.index') }}" class="nav-link {{ request()->routeIs('prestasi-non-akademik.*') ? 'active' : '' }}">
                        Prestasi Non Akademik
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('laporan-prestasi.index') }}" class="nav-link {{ request()->routeIs('laporan-prestasi.*') ? 'active' : '' }}">
                        Laporan Prestasi
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('mata-pelajaran.index') }}" class="nav-link {{ request()->routeIs('mata-pelajaran.*') ? 'active' : '' }}">
                        Mata Pelajaran
                    </a>
                </li>

            </ul>

        </aside>

        <!-- Main -->

        <main class="col-lg-10 col-12 main-content">

            <div class="d-lg-none mb-3">

                <button class="btn btn-success"
                        data-bs-toggle="offcanvas"
                        data-bs-target="#mobileSidebar">

                    ☰ Menu

                </button>

            </div>

            <nav class="topbar">

                <div class="d-flex justify-content-between align-items-center">

                    <strong>

                        {{ auth()->user()?->name }}

                    </strong>

                    <form action="/keluar" method="POST">

                        @csrf

                        <button class="btn btn-danger">

                            Logout

                        </button>

                    </form>

                </div>

            </nav>

            @yield('content')

        </main>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</body>
</html>