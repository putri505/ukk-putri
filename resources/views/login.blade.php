<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>daftar</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Font (opsional biar mirip Figma) -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        body {
            background-color: #f5f5f5;
            font-family: 'Poppins', sans-serif;
        }

        /* HEADER */
        .header {
            text-align: center;
            margin-top: 30px;
        }

        .logo {
            width: 70px;
        }

        .title {
            font-weight: 600;
            color: #1c3b5a;
            font-size: 20px;
        }

        .subtitle {
            font-size: 12px;
            letter-spacing: 2px;
            color: #1c3b5a;
        }

        /* CARD FORM */
        .card-daftar {
            background-color: #e8d7b5;
            border-radius: 20px;
            padding: 30px;
            width: 400px;
            margin: 40px auto;
        }

        .card-daftar h3 {
            text-align: center;
            font-weight: 600;
        }

        .line {
            height: 2px;
            background-color: #999;
            margin: 10px 0 20px;
        }

        /* INPUT */
        .input-group {
            background: #eee;
            border-radius: 12px;
            margin-bottom: 15px;
            padding: 5px 10px;
        }

        .input-group-text {
            background: transparent;
            border: none;
        }

        .form-control {
            border: none;
            background: transparent;
        }

        .form-control:focus {
            box-shadow: none;
        }

        /* BUTTON */
        .btn-daftar {
            background-color: #1e63b5;
            color: white;
            border-radius: 20px;
            width: 100%;
        }

        .btn-daftar:hover {
            background-color: #174a8a;
        }
    </style>
</head>

<body>

    <!-- HEADER LOGO -->
    <div class="header">
        <img src="images/logo.png" class="logo" alt="Logo">
        <div class="title">SMARTSARPRAS SISTEM CERDAS</div>
        <div class="subtitle">SARANA & PRASARANA SEKOLAH</div>
    </div>

    <!-- FORM -->
    <div class="card-daftar shadow">
        <h3>MASUK</h3>
        <div class="line"></div>

        <form>
            <!-- Username -->
            <div class="input-group">
                <span class="input-group-text">👤</span>
                <input type="Nis" class="form-control" placeholder="Nis">
            </div>

            <!-- Password -->
            <div class="input-group">
                <span class="input-group-text">🔒</span>
                <input type="password" class="form-control" placeholder="Password">
            </div>



            <button class="btn btn-daftar mt-2">Masuk</button>
        </form>
        <form action="/login" method="POST">
    @csrf

    <input type="email" name="email" placeholder="Email" class="form-control mb-2">
    <input type="password" name="password" placeholder="Password" class="form-control mb-2">

    <button class="btn btn-success">Login</button>
</form>
    </div>

</body>

</html>