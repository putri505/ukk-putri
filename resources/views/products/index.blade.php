@extends('layouts.dashboard')

@section('content')

<div class="dashboard-box">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            <h4 class="fw-bold">Dashboard</h4>
            <p>Selamat Datang Naya Adreena!</p>
        </div>

        <button class="btn btn-light border">
        <a href="buat_laporan">+ Tambah Laporan</a>
        </button>
    </div>

    <!-- CARD -->
    <div class="row mb-4">
        <div class="col-md-3">
            <div class="card-box">
                <h3 class="">5</h3>
                <p>Total Laporan</p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card-box">
                <h3>2</h3>
                <p>Menunggu</p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card-box">
                <h3>2</h3>
                <p>Dalam Proses</p>
                
            </div>
        </div>

        <div class="col-md-3">
            <div class="card-box">
                <h3>1</h3>
                <p>Selesai</p>
            </div>
        </div>
    </div>

    <!-- LAPORAN -->
    <div class="bg-white p-3 rounded">
        <div class="d-flex justify-content-between">
            <h5>Laporan Terbaru</h5>
        </div>

        <hr>

        <!-- ITEM -->
        <div class="d-flex justify-content-between align-items-center mb-2">
            <div>
                <strong>PC Lab B Rusak</strong><br>
                <small>lokasi Lab B samping sekre</small>
            </div>

            <div>
                <small>7 Februari, 08.00</small>
                <span class="status-proses ms-2">Dalam Proses</span>
            </div>
        </div>

        <div class="d-flex justify-content-between align-items-center">
            <div>
                <strong>Kursi Lab Rusak</strong><br>
                <small>lokasi Lab A</small>
            </div>

            <div>
                <small>15 Januari, 09.50</small>
                <span class="status-selesai ms-2">Selesai</span>
            </div>
        </div>

    </div>

</div>

@endsection