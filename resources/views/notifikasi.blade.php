@extends('layouts.dashboard')

@section('content')

<div class="container mt-4">

    <div class="card shadow-sm notifikasi-card">

        <!-- HEADER -->
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="fw-bold mb-0">Notifikasi</h4>

        </div>


        <div class="card-body">

            <!-- NOTIFIKASI 1 -->
            <div class="d-flex align-items-start mb-3">

                <div class="me-3">
                    <img src="{{ asset('images/notifikasired.png') }}" height="40" class="me-2">
                </div>

                <div class="flex-grow-1">
                    <h6 class="fw-bold mb-1">Menunggu Laporan</h6>
                    <p class="mb-0 text-muted">
                        Menunggu laporan air toilet mati
                    </p>
                </div>

                <div class="text-muted small">
                    5 Menit yang lalu
                </div>

            </div>

            <hr>


            <!-- NOTIFIKASI 2 -->
            <div class="d-flex align-items-start mb-3">

                <div class="me-3">
                    <img src="{{ asset('images/notifikasikuning.png') }}" height="40" class="me-2">
                </div>

                <div class="flex-grow-1">
                    <h6 class="fw-bold mb-1">Laporan Diproses</h6>
                    <p class="mb-0 text-muted">
                        Laporan kursi lab rusak sedang ditangani oleh admin
                    </p>
                </div>

                <div class="text-muted small">
                    1 Jam yang lalu
                </div>

            </div>

            <hr>


            <!-- NOTIFIKASI 3 -->
            <div class="d-flex align-items-start">

                <div class="me-3">
                   <img src="{{ asset('images/notifikasidone.png') }}" height="40" class="me-2">
                </div>

                <div class="flex-grow-1">
                    <h6 class="fw-bold mb-1">Laporan Selesai</h6>
                    <p class="mb-0 text-muted">
                        Laporan PC Lab diperbaiki sudah selesai
                    </p>
                </div>

                <div class="text-muted small">
                    Kemarin
                </div>

            </div>

        </div>

    </div>

</div>

@endsection