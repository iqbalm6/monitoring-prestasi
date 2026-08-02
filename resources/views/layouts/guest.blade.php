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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Fraunces:opsz,wght@9..144,500;9..144,600;9..144,700&display=swap" rel="stylesheet">

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])

    <style>

        :root{
            --bg:#E8ECE7;
            --header-bg:#F5F5F5;
            --header-border:#4A4A4A;
            --topbar:#46a336;
            --green:#2e6b1f;
            --green-deep:#1B5E20;
            --footer-bg:#1a5a01;
            --card-bg:#FFFFFF;
            --input-border:#C7C7C7;
            --ink:#1f2d3d;
            --ink-soft:#2d2d2d;
            --text-body:#444;
            --text-muted:#555;
            --text-mutedlight:#666;
            --text-field:#222;
            --placeholder:#888;
        }

        *{
            box-sizing:border-box;
        }

        html{
            scroll-behavior:smooth;
        }

        body{
            margin:0;
            padding:0;
            background:var(--bg);
            font-family:'Plus Jakarta Sans', Arial, Helvetica, sans-serif;
            -webkit-font-smoothing:antialiased;
            color:var(--text-body);
        }

        @media (prefers-reduced-motion: reduce){
            *{
                animation-duration:0.001ms !important;
                animation-iteration-count:1 !important;
                transition-duration:0.001ms !important;
                scroll-behavior:auto !important;
            }
        }

        /* ===== Top accent bar ===== */
        .topbar{
            height:6px;
            width:100%;
            background:linear-gradient(90deg, var(--topbar), var(--green) 55%, var(--green-deep));
        }

        /* ===== Header ===== */
        .header{
            background:var(--header-bg);
            border-bottom:4px solid var(--header-border);
            padding:20px 40px;
        }

        .header-content{
            display:flex;
            align-items:center;
            gap:22px;
            max-width:1280px;
            margin:0 auto;
        }

        .logo{
            width:88px;
            height:auto;
            flex-shrink:0;
            filter:drop-shadow(0 4px 10px rgba(0,0,0,.12));
        }

        .school-text small{
            color:var(--text-mutedlight);
            font-size:14px;
            letter-spacing:.06em;
            text-transform:uppercase;
            font-weight:600;
        }

        .school-text h2{
            margin:2px 0 4px;
            color:var(--ink);
            font-weight:800;
            font-size:24px;
            letter-spacing:.01em;
        }

        .school-text p{
            margin:0;
            color:var(--text-body);
            font-size:15px;
        }

        @media(max-width:768px){

            .header{
                padding:18px 16px;
            }

            .header-content{
                flex-direction:column;
                text-align:center;
                gap:12px;
            }

            .logo{
                width:72px;
            }

            .school-text h2{
                font-size:21px;
            }

            .school-text p{
                font-size:14px;
            }
        }

        /* ===== Main ===== */
        .main-content{
            min-height:78vh;
            padding:64px 30px;
            position:relative;
            overflow:hidden;
        }

        /* faint geometric watermark, echoes Islamic star-pattern motif */
        .main-content::before{
            content:"";
            position:absolute;
            top:-120px;
            right:-120px;
            width:520px;
            height:520px;
            background-image:
                repeating-linear-gradient(45deg, rgba(46,107,31,.05) 0 2px, transparent 2px 34px),
                repeating-linear-gradient(-45deg, rgba(46,107,31,.05) 0 2px, transparent 2px 34px);
            border-radius:50%;
            pointer-events:none;
        }

        @media(max-width:768px){
            .main-content{
                padding:32px 16px 40px;
            }
            .main-content::before{
                width:320px;
                height:320px;
                top:-80px;
                right:-80px;
            }
        }

        .container{
            max-width:1280px;
            margin:0 auto;
            position:relative;
        }

        .row.align-items-center{
            display:flex;
            flex-wrap:wrap;
            align-items:stretch;
            margin:-18px;
        }

        .col-lg-8, .col-lg-4{
            padding:18px;
        }

        .col-lg-8{
            flex:1 1 62%;
            max-width:62%;
        }

        .col-lg-4{
            flex:1 1 38%;
            max-width:38%;
        }

        @media(max-width:992px){
            .col-lg-8, .col-lg-4{
                flex:1 1 100%;
                max-width:100%;
            }
            .order-2{ order:2; }
            .order-1{ order:1; }
        }

        /* ===== Hero ===== */
        .hero-box{
            background:#F8F8F8;
            padding:64px 60px;
            border-radius:24px;
            border-left:8px solid var(--green-deep);
            box-shadow:0 20px 45px rgba(31,45,61,.10), 0 2px 8px rgba(31,45,61,.06);
            height:100%;
            display:flex;
            flex-direction:column;
            justify-content:center;
            animation:rise .6s ease both;
        }

        @keyframes rise{
            from{ opacity:0; transform:translateY(14px); }
            to{ opacity:1; transform:translateY(0); }
        }

        .hero-box h1{
            font-family:'Fraunces', 'Plus Jakarta Sans', serif;
            color:var(--ink);
            font-size:clamp(32px, 4vw, 46px);
            font-weight:700;
            margin-bottom:16px;
            line-height:1.15;
            letter-spacing:-.01em;
        }

        .hero-box .hero-desc{
            color:var(--text-muted);
            line-height:1.8;
            font-size:clamp(16px, 1.6vw, 19px);
            margin-bottom:38px;
            max-width:640px;
        }

        .feature{
            display:grid;
            gap:18px;
        }

        .feature-item{
            font-size:clamp(16px, 1.4vw, 20px);
            color:var(--ink-soft);
            font-weight:600;
            display:flex;
            align-items:center;
            gap:14px;
            background:#ffffff;
            border:1px solid rgba(46,107,31,.14);
            border-radius:14px;
            padding:16px 20px;
            box-shadow:0 4px 14px rgba(31,45,61,.05);
            transition:transform .2s ease, box-shadow .2s ease;
        }

        .feature-item:hover{
            transform:translateY(-3px);
            box-shadow:0 10px 22px rgba(31,45,61,.09);
        }

        .feature-item .tick{
            display:inline-flex;
            align-items:center;
            justify-content:center;
            width:30px;
            height:30px;
            flex-shrink:0;
            border-radius:50%;
            background:linear-gradient(135deg, var(--topbar), var(--green-deep));
            color:#fff;
            font-size:14px;
            font-weight:800;
        }

        @media(max-width:768px){

            .hero-box{
                padding:34px 26px;
                border-left:6px solid var(--green-deep);
                border-radius:20px;
                text-align:center;
            }

            .hero-box h1{
                text-align:center;
            }

            .hero-desc{
                text-align:center;
                margin-left:auto;
                margin-right:auto;
            }

            .feature-item{
                justify-content:center;
                text-align:left;
            }
        }

        /* ===== Login card ===== */
        .login-card{
            background:var(--card-bg);
            border-radius:24px;
            padding:48px 42px;
            box-shadow:0 25px 55px rgba(31,45,61,.18), 0 4px 12px rgba(31,45,61,.08);
            border-top:6px solid var(--green);
            height:100%;
            display:flex;
            flex-direction:column;
            justify-content:center;
            animation:rise .6s ease .1s both;
        }

        .login-card h3{
            text-align:center;
            color:var(--green-deep);
            margin-bottom:8px;
            font-weight:800;
            font-size:28px;
            letter-spacing:.04em;
        }

        .login-card h3::after{
            content:"";
            display:block;
            width:56px;
            height:4px;
            margin:14px auto 30px;
            border-radius:4px;
            background:linear-gradient(90deg, var(--topbar), var(--green-deep));
        }

        .form-label{
            color:var(--green) !important;
            font-size:14px;
            font-weight:700;
            letter-spacing:.02em;
        }

        .form-control{
            background:#ffffff;
            border:1px solid var(--input-border);
            color:var(--text-field);
            height:52px;
            font-size:15px;
            border-radius:12px;
            padding:0 16px;
            transition:border-color .2s ease, box-shadow .2s ease;
        }

        .form-control::placeholder{
            color:var(--placeholder);
        }

        .form-control:focus{
            border-color:var(--green);
            background:#ffffff;
            box-shadow:0 0 0 .2rem rgba(46,107,31,.15);
            outline:none;
        }

        .form-check-label{
            color:var(--green) !important;
            font-weight:600;
        }

        .form-check-input:checked{
            background-color:var(--green);
            border-color:var(--green);
        }

        .form-check-input:focus{
            box-shadow:0 0 0 .2rem rgba(46,107,31,.15);
        }

        .btn-login{
            height:52px;
            border-radius:12px;
            border:none;
            background:linear-gradient(135deg, var(--green), var(--green-deep));
            color:#fff;
            font-weight:700;
            letter-spacing:.03em;
            box-shadow:0 12px 24px rgba(27,94,32,.28);
            transition:transform .15s ease, box-shadow .15s ease, filter .15s ease;
        }

        .btn-login:hover{
            transform:translateY(-2px);
            box-shadow:0 16px 30px rgba(27,94,32,.34);
            filter:brightness(1.04);
            color:#fff;
        }

        .btn-login:active{
            transform:translateY(0);
        }

        .btn-login:focus-visible,
        a:focus-visible,
        .form-control:focus-visible{
            outline:3px solid rgba(46,107,31,.45);
            outline-offset:2px;
        }

        .login-link{
            color:var(--green) !important;
            font-weight:600;
            text-decoration:none;
        }

        .login-link:hover{
            text-decoration:underline;
        }

        a{
            color:var(--green);
        }

        a:hover{
            color:var(--green-deep);
        }

        @media(max-width:768px){

            .login-card{
                width:100%;
                padding:36px 26px;
                border-radius:20px;
            }
        }

        @media(max-width:992px){
            .login-card{
                width:100%;
                max-width:480px;
                margin:0 auto;
            }
        }

        /* ===== Footer ===== */
        .footer{
            font-size:14px;
            background:var(--footer-bg);
            color:#ffffff;
            text-align:center;
            padding:18px 15px;
            letter-spacing:.02em;
        }

        @media(max-width:768px){
            .footer{
                padding:18px;
                font-size:13px;
            }
        }

    </style>

</head>

<body>

    <div class="topbar"></div>

    <div class="header">

        <div class="header-content">

            <img
                src="{{ asset('images/logo-sekolah.png') }}"
                class="logo"
                alt="Logo Madrasah Aliyah Ruhul Islam Anak Bangsa"
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
                                <span class="tick">✓</span> Monitoring Nilai Akademik
                            </div>

                            <div class="feature-item">
                                <span class="tick">✓</span> Monitoring Prestasi Non Akademik
                            </div>

                            <div class="feature-item">
                                <span class="tick">✓</span> Laporan Prestasi Siswa
                            </div>

                            <div class="feature-item">
                                <span class="tick">✓</span> Akses Orang Tua Secara Real-Time
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
    © {{ date('Y') }} MA Ruhul Islam Anak Bangsa. All Rights Reserved.<br>
    Designed & Developed by <strong>IIqbalM</strong>
</div>

</body>

</html>