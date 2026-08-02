<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        Monitoring Prestasi Siswa
    </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])

    <style>

        body{
            margin:0;
            padding:0;
            background:#E8ECE7;
            font-family:Arial, Helvetica, sans-serif;
        }

        .header{
            background:F5F5F5;
            border-bottom:4px solid #4A4A4A;
            padding:18px 30px;
        }

        .header-content{
            display:flex;
            align-items:center;
            gap:20px;
        }

        @media(max-width:768px){

            .header{

                padding:15px;

            }

            .header-content{

                flex-direction:column;
                text-align:center;
            }

            .logo{

                width:75px;
            }

            .school-text h2{

                font-size:22px;
            }

            .school-text p{

                font-size:15px;
            }

        }

        .logo{
            width:90px;
        }

        .school-text small{
            color:#666;
            font-size:15px;
        }

        .school-text h2{
            margin:0;
            color:#1f2d3d;
            font-weight:700;
        }

        .school-text p{
            margin:0;
            color:#444;
        }

        .main-content{
            min-height:75vh;
            padding:50px 30px;
        }
                @media(max-width:768px){

        .main-content{

            padding:20px 15px;

        }

        }

        .hero-box{
            background:#F8F8F8;
            padding:55px;
            border-radius:20px;
            border-left:8px solid #2E6B1F;
            box-shadow:0 5px 15px rgba(0,0,0,.08);
            height:100%;
        }

        .hero-box h1{
            color:#1f2d3d;
            font-size:38px;
            font-weight:600;
            margin-bottom:15px;
            line-height:1.2;
        }

        .hero-box .hero-desc{
            color:#555;
            line-height:1.8;
            font-size:19px;
            margin-bottom:40px;
            max-width:900px;
        }

        .feature-item{
            font-size:22px;
            color:#2d2d2d;
            margin-bottom:24px;
            font-weight:500;
        }

        .login-card{
            background:ffffff;
            border-radius:20px;
            padding:45px;
            box-shadow:0 15px 35px rgba(0,0,0,.15);
            border-top:6px solid #2e6b1f;
        }

        .login-card h3{
            text-align:center;
            color:#1B5E20;
            margin-bottom:35px;
            font-weight:700;
            font-size:30px;
        }

        .form-label{
            color:#2e6b1f !important;
            font-size:15px;
            font-weight:700;
        }

        .form-control{
            background:#FfFfFf;
            border:1px solid #C7C7C7;
            color:#222;
            height:52px;
            font-size:15px;
        }

        .form-check-label{
            color:#2e6b1f !important;
            font-weight:600;
        }

        .login-link{
            color:#2e6b1f !important;
            font-weight:600;
            text-decoration:none;
        }

        .login-link:hover{
            text-decoration:underline;
        }

        .form-control::placeholder{
            color:#888;
        }

        .form-control:focus{
            border-color:#2e6b1f;
            background:#ffffff;
            box-shadow:0 0 0 0.2rem rgba(46,107,31,.15);
        }
        
        .footer{
            font-size:14px;
            background: #1a5a01;
            color:white;
            text-align:center;
            padding:15px;
        }

        @media(max-width:768px){
            .footer{
                padding:18px;
                font-size:13px;
            }
        }

        @media(max-width:992px){

            .main-content{
                padding:30px;
            }

            .hero-box{
                margin-bottom:30px;
            }

            .hero{
                margin-right:0;
                margin-bottom:40px;
                text-align:center;
            }

            .login-card{
                width:100%;
                max-width:450px;
            }
        }

                @media(max-width:768px){

        .hero-box{

            padding:30px;
            border-left:6px solid #2E6B1F;

        }

        .hero-box h1{

            font-size:34px;
            text-align:center;

        }

        .hero-desc{

            font-size:16px;
            text-align:center;
            margin-bottom:25px;

        }

        .feature-item{

            font-size:18px;
            margin-bottom:15px;

        }

        }

                @media(max-width:768px){

        .login-card{

            width:100%;
            padding:30px 25px;

        }

        }

        a{
            color:#2e6b1f;
        }

        a:hover{
            color:#245518;
        }

    </style>

</head>

<body>

    <div style="height:32px; background:#46a336; width:100%;"></div>

    <div class="header">

        <div class="header-content">

            <img
                src="{{ asset('images/logo-sekolah.png') }}"
                class="logo"
            >

            <div class="school-text">

                <small>
                    Madrasah Aliyah
                </small>

                <h2>
                    RUHUL ISLAM ANAK BANGSA
                </h2>

                <p>
                    Sistem Informasi Monitoring Prestasi Siswa
                </p>

            </div>

        </div>

    </div>

    <div class="main-content">

    <div class="container">

        <div class="row align-items-center g-5">

            <div class="col-lg-8 order-2 order-lg-1">

                <div class="hero-box">

                    <h1>
                        EduTrack
                    </h1>

                    <p class="hero-desc">
                        Sistem informasi pemantau perkembangan prestasi
                        siswa secara realtime.
</p>

<div class="feature">

    <div class="feature-item">
        ✓ Monitoring Nilai Akademik
    </div>

    <div class="feature-item">
        ✓ Monitoring Prestasi Non Akademik
    </div>

    <div class="feature-item">
        ✓ Laporan Prestasi Siswa
    </div>

    <div class="feature-item">
        ✓ Akses Orang Tua Secara Real-Time
    </div>

</div>

                </div>

            </div>

            <div class="col-lg-4 order-1 order-lg-2">

                <div class="login-card">

                    <h3>
                        LOGIN
                    </h3>

                    {{ $slot }}

                </div>

            </div>

        </div>

    </div>

</div>

    <div class="footer">

        © {{ date('Y') }}
        MA Ruhul Islam Anak Bangsa.
        All Rights Reserved.

    </div>

</body>

</html>