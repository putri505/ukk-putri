<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Kelola Akun</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <style>
        body {
            background-color: #f5e6c8;
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
        .content {
            margin-left: 250px;
            padding: 20px;
        }

        .card-box {
            background: #fff;
            border-radius: 10px;
            padding: 20px;
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar bg-white px-3">
        <div class="d-flex align-items-center">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" height="70" class="me-1">
            <img src="{{ asset('images/logo2.png') }}" alt="Logo" height="70" class="me-2">
        </div>
    </nav>

    <!-- SIDEBAR -->
    <div class="sidebar">
        <a href="dashboard">Dashboard</a>
        <a href="#">Laporan Saya</a>
        <a href="">Kelola Laporan</a>
        <a href="notifikasi">Notifikasi</a>
        <a href="kelola-akun">Kelola Akun</a>

        <hr>

        <a href="#">Keluar</a>
    </div>

    <!-- 🔹 Content -->
    <div class="content">

        <div class="card-box">
            <h3 class="text-center mb-3">Kelola Akun</h3>

            <!-- Foto -->
            <div class="text-center mb-3">
                <img src="{{ Auth::check() && Auth::user()->foto ? asset('storage/' . Auth::user()->foto) : 'https://via.placeholder.com/100' }}"
                    class="rounded-circle mb-2" width="100">

                <form action="{{ route('update.foto') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="foto" class="form-control mb-2">
                    <button class="btn btn-secondary">Ubah Foto</button>
                </form>
            </div>

            <hr>

            <!-- Data -->
            <div class="row mb-2">
                <div class="col-3"><b>Username</b></div>
                <div class="col-9">{{ Auth::user()->name ?? 'Guest' }}</div>
            </div>

            <div class="row mb-2">
                <div class="col-3"><b>Password</b></div>
                <div class="col-9">********</div>
            </div>

            <div class="row mb-4">
                <div class="col-3"><b>Email</b></div>
                <div class="col-9">{{ Auth::user()->email ?? '-' }}</div>
            </div>

            <!-- Tombol -->
            <div class="row">
                <div class="col-md-6">
                    <form action="{{ route('update.password') }}" method="POST">
                        @csrf
                        <input type="password" name="password" class="form-control mb-2" placeholder="Password baru">
                        <button class="btn btn-secondary">Ubah Password</button>
                    </form>
                </div>

                <div class="col-md-6">
                    <form action="{{ route('update.email') }}" method="POST">
                        @csrf
                        <input type="email" name="email" class="form-control mb-2" placeholder="Email baru">
                        <button class="btn btn-primary">Ubah Email</button>
                    </form>
                </div>
            </div>

        </div>

    </div>

</body>

</html>
