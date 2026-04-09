<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>SmartSarpras</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background-color:#f5f5f5;
        }

        .navbar-custom{
            background:white;
            padding:15px 60px;
        }

        .hero-section{
            background:#E6D8B5;
            padding:80px 0;
        }

        .btn-outline-custom{
            border:2px solid #1E3A8A;
            color:#1E3A8A;
            font-weight:500;
        }

        .btn-outline-custom:hover{
            background:#1E3A8A;
            color:white;
        }
    </style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-custom d-flex justify-content-between">

    <div class="d-flex align-items-center">
        <img src="{{ asset('images/logo.png') }}" height="70" class="me-2">
        <img src="{{ asset('images/logo2.png') }}" height="70" class="me-2">
    </div>

    <div>
        <a href="login" class="me-3 text-dark text-decoration-none">MASUK</a>
        <a href="daftar" class="btn btn-outline-custom">DAFTAR</a>
    </div>

</nav>


<!-- HERO -->
<section class="hero-section">
    <div class="container">
        <div class="row align-items-center">

            <!-- TEXT -->
            <div class="col-md-6">
                <h1 class="fw-bold mb-4">
                    Tentang<br>
                </h1>

                <p class="fw-medium fs-5 mb-4">
                    SmartSarpras adalah website pengaduan Sarana dan Prasarana sekolah yang dirancang untuk
                    memudahkan warga sekolah dalam melaporkan kondisi fasilitas sekolah secara cepat dan terstruktur.
                    Website ini hadir sebagai solusi digital untuk mendukung terciptanya lingkungan belajar yang lebih
                    baik, aman, dan nyaman.
                </p>

                <a href="/home" class="btn btn-outline-custom me-3 px-4">Beranda</a>
                <a href="/tentang" class="btn btn-outline-custom px-4">Tentang</a>
            </div>

            <!-- IMAGE -->
            <div class="col-md-6 text-center">
                <img src="{{ asset('images/school.png') }}"
                    alt="Sekolah"
                    height="440">
            </div>

        </div>
    </div>
</section>

</body>
</html>