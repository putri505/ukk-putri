<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartSarpras</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            background-color: #f5f5f5;
        }

        /* NAVBAR */
        .navbar {
            border-bottom: 1px solid #ddd;
        }

        /* SIDEBAR */
        .sidebar {
            width: 250px;
            height: 100vh;
            background: #fff;
            border-right: 1px solid #ddd;
            position: fixed;
        }

        .sidebar a {
            display: block;
            padding: 15px;
            color: #000;
            text-decoration: none;
        }

        .sidebar a:hover,
        .sidebar a.active {
            background-color: #f1f1f1;
            font-weight: 600;
        }

        /* CONTENT */
        .main-content {
            margin-left: 250px;
            padding: 20px;
        }

        /* DASHBOARD */
        .dashboard-box {
            background: #e6d3a3;
            padding: 10px;
            border-radius: 10px;
        }

        .card-box {
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 15px;
            text-align: center;
            background: #fff;
        }

        .status-selesai {
            background: #4CAF50;
            color: #fff;
            padding: 5px 15px;
            border-radius: 20px;
        }

        .status-proses {
            background: #3678f4;
            color: #fff;
            padding: 5px 15px;
            border-radius: 20px;
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar bg-white px-3">
        <div class="d-flex align-items-center">
            <img src="{{ asset('images/logo.png') }}"
            alt="Logo"
            height="70"
            class="me-1">
            <img src="{{ asset('images/logo2.png') }}"
                    alt="Logo"
                    height="70"
                    class="me-2">
        </div>
    </nav>

    <!-- SIDEBAR -->
    <div class="sidebar">
        <a href="dashboard" >Dashboard</a>
        <a href="#">Laporan Saya</a>
        <a href="">Kelola Laporan</a>
        <a href="notifikasi">Notifikasi</a>
        <a href="kelola-akun">Kelola Akun</a>

        <hr>

        <a href="#">Keluar</a>
    </div>

    <!-- CONTENT -->
    <div class="main-content">
        @yield('content')
    </div>

</body>

</html>
