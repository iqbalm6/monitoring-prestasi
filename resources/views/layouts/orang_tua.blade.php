<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Dashboard Orang Tua</title>

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
            color:white;
        }

        .sidebar-title{
            font-size:24px;
            font-weight:700;
        }

        .sidebar .nav-link{
            color:#dfead9;
            padding:12px 15px;
            border-radius:10px;
            margin-bottom:6px;
            transition:.3s;
        }

        .sidebar .nav-link:hover{
            background:#2e6b1f;
            color:white;
        }

        .sidebar .nav-link.active{
            background:#2e6b1f;
            color:white;
            font-weight:700;
        }

        .topbar{
            background:white;
            padding:18px 25px;
            box-shadow:0 3px 10px rgba(0,0,0,.08);
        }

        .content{
            padding:30px;
        }

    </style>

</head>

<body>

<div class="container-fluid">

<div class="row">

<div class="col-lg-2 sidebar p-3">

<h4 class="sidebar-title">

EduTrack

</h4>

<small>

Portal Orang Tua

</small>

<hr>

<ul class="nav flex-column">

<li class="nav-item">

<a
href="{{ route('orang-tua.dashboard') }}"
class="nav-link {{ request()->routeIs('orang-tua.dashboard') ? 'active' : '' }}"
>

Dashboard

</a>

</li>

<li class="nav-item">

<a
href="#"
class="nav-link"
>

Prestasi Akademik

</a>

</li>

<li class="nav-item">

<a
href="#"
class="nav-link"
>

Prestasi Non Akademik

</a>

</li>

<li class="nav-item">

<a
href="#"
class="nav-link"
>

Laporan Prestasi

</a>

</li>

<li class="nav-item">

<a
href="#"
class="nav-link"
>

Profil Saya

</a>

</li>

<li class="nav-item mt-3">

<form
action="/keluar"
method="POST"
>

@csrf

<button
class="btn btn-danger w-100"
>

Logout

</button>

</form>

</li>

</ul>

</div>

<div class="col-lg-10">

<div class="topbar d-flex justify-content-between">

<div>

<strong>

{{ auth()->user()->name }}

</strong>

<br>

<small>

Orang Tua

</small>

</div>

</div>

<div class="content">

@yield('content')

</div>

</div>

</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>