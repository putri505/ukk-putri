<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartSarpras</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">


    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
        }

        .navbar-custom {
            background-color: #f5f5f5;
            padding: 15px 0;
            border-bottom: 1px solid #e5e5e5;
        }

        .navbar-brand {
            font-weight: 700;
            color: #1e3a8a !important;
        }

        .nav-link {
            font-weight: 500;
            color: #000 !important;
        }

        .btn-daftar {
            border: 2px solid #1e3a8a;
            color: #1e3a8a;
            font-weight: 500;
        }

        .btn-daftar:hover {
            background-color: #1e3a8a;
            color: #fff;
        }

        /* HERO FULL */
        .hero-section {
            background-color: #e6d3a3;
            min-height: 100vh;
            display: flex;
            align-items: center;
        }

        .btn-outline-custom {
            border: 2px solid #1e3a8a;
            color: #1e3a8a;
        }

        .btn-outline-custom:hover {
            background-color: #1e3a8a;
            color: white;
        }

        html,
        body {
            height: 100%;
            margin: 0;
            overflow: hidden;
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="">
                <img src="{{ asset('images/logo.png') }}"
                    alt="Logo"
                    height="70"
                    class="me-2">
                <img src="{{ asset('images/logo2.png') }}"
                    alt="Logo"
                    height="70"
                    class="me-2">
            </a>

            <div class="ms-auto">
                <a href="login" class="nav-link d-inline me-3">MASUK</a>
                <a href="daftar" class="btn btn-outline-primary px-3">DAFTAR</a>
            </div>
        </div>
    </nav>


</body>

</html> 