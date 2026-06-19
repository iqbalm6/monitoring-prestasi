<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Logout Berhasil</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <style>

        body{
            margin:0;
            padding:0;
            background:#E8ECE7;
            font-family:Arial, Helvetica, sans-serif;
        }

        .top-bar{
            height:32px;
            background:#46a336;
        }

        .header{
            background:#f5f5f5;
            border-bottom:4px solid #4A4A4A;
            padding:20px 40px;
        }

        .header-content{
            display:flex;
            align-items:center;
            gap:20px;
        }

        .logo{
            width:90px;
        }

        .school-text h2{
            margin:0;
            color:#1f2d3d;
            font-weight:700;
            font-size:32px;
        }

        .school-text p{
            margin:0;
            color:#444;
        }

        .logout-wrapper{
            min-height:70vh;
            display:flex;
            justify-content:center;
            align-items:center;
        }

        .logout-card{
            text-align:center;
        }

        .logout-card h1{
            font-weight:700;
            margin-bottom:25px;
        }

        .logout-card p{
            font-size:24px;
        }

        .btn-login{
            background:#2e6b1f;
            color:white;
            border:none;
            padding:10px 20px;
            border-radius:8px;
            text-decoration:none;
            margin-left:10px;
        }

        .btn-login:hover{
            background:#255718;
            color:white;
        }

        .footer{
            background:#1a5a01;
            color:white;
            text-align:center;
            padding:15px;
        }

    </style>

</head>

<body>

<div class="top-bar"></div>

<div class="header">

    <div class="header-content">

        <img src="{{ asset('images/logo-sekolah.png') }}"
             class="logo">

        <div class="school-text">

            <p>Dayah / Madrasah Aliyah</p>

            <h2>RUHUL ISLAM ANAK BANGSA</h2>

        </div>

    </div>

</div>

<div class="logout-wrapper">

    <div class="logout-card">

        <h1>
            Anda sudah berhasil log out
        </h1>

        <p>

            Ingin login kembali?

            <a href="{{ route('login') }}"
               class="btn-login">

                Klik di sini

            </a>

        </p>

    </div>

</div>

<div class="footer">

    © {{ date('Y') }}
    MA Ruhul Islam Anak Bangsa.
    All rights reserved.

</div>

</body>

</html>