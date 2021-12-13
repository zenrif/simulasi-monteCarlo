@extends('layouts.main')

@section('container')
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg mt-4">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl mt-4" id="navbarBlur"
        navbar-scroll="true">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <h4 class="font-weight-bolder mb-2">Monte Carlo</h4>
                <h6 class="font mb-1">Selamat datang</h6>
            </nav>
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                </div>
                <ul class="navbar-nav justify-content-end">

                    <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                            <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                            </div>
                        </a>
                    </li>

    </nav>
    <!-- End Navbar -->
    <div class="container">
        <div class="panel panel-primary">
            <h2>Deskripsi</h2>
            <div class="panel-body">
                <div class="col-md-10">
                    <span class="text-center">Simulasi Monte Carlo dikenal dengan istilah sampling simulation atau
                        Monte
                        Carlo Samling Technique. Istilah Monte Carlo pertama digunakan selama masa pengembangan bom atom
                        yang merupakan nama kode dari simulasi nuclear fission. Simulasi ini sering digunakan untuk
                        evaluasi
                        dampak perubahan input dan resiko dalam pembuatan keputusan. Simulasi ini menggunakan data
                        sampling
                        yang telah ada (historical data) dan telah diketahui distribusi datanya.</span>
                </div>
                <div class="col-md-8 mt-3">
                    <h4>Panduan</h4>
                    <ol>
                        <li>Tentukan jumlah data permintaan</li>
                        <li>Perhitungan distribusi dari data permintaan yang telah dimasukan</li>
                        <li>Simulasi berdasarkan distribusi di atas</li>
                    </ol>
                </div>
                <div class="col-md-8 mt-3">
                    <h4>Batasan</h4>
                    <ol>
                        <li>Apabila suatu persoalan sudah dapat diselesaikan atau dihitung jawabannya secara matematis
                            dengan tuntas, maka hendaknya jangan menggunakan simulasi ini.</li>
                        <li>Apabila sebagian persoalan tersebut dapat diselesaikan secara analitis dengan baik, maka
                            penyelesaiannya lebih baik dilakukan secara terpisah. Sebagian secara analitis dan sebagian
                            lagi simulasi.</li>
                        <li>Apabila mungkin dapat digunakan simulasi perbandingan.</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    </div>
</main>
@endsection