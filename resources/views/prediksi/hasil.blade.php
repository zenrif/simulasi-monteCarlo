@extends('layouts.main')

@section('container')
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg mt-4">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl mt-4" id="navbarBlur"
        navbar-scroll="true">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <h4 class="font-weight-bolder mb-2">Prediksi Permintaan</h4>
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
            <div class="panel-heading">
                <h2>Hasil</h2>
            </div>
            <p>Bilangan acak didapatkan menggunakan metode LCG</p>
            <div class="table table-responsive">
                <table class="table table-hover mb-3">
                    <thead class="table-primary">
                        <tr>
                            <th>Hari</th>
                            <th>Bilangan Acak</th>
                            <th>Permintaan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for($i=0; $i<$jmlRandom; $i++) <tr>
                            <td>{{ $i+1 }}</td>
                            <td>
                                {{-- //proses random dengan metode LCM --}}
                                {{-- Ubah ke Controller nanti --}}
                                @php
                                ($hasil[$i+1] = ($a*$hasil[$i] + $c) % $m)
                                @endphp
                                @php
                                ($angka_random[$i] = round($hasil[$i+1]/$m, 5))
                                @endphp
                                {{ $angka_random[$i] }}

                            </td>
                            <td>
                                @for($j=0;$j<$amount;$j++) @if($angka_random[$i]>= $botInterval[$j] &&
                                    $angka_random[$i] <= $topInterval[$j]) @php $demandResult[$i]=$demand[$j] @endphp {{
                                        $demandResult[$i] }} @endif @endfor </td>
                                        </tr>
                                        @endfor
                    </tbody>
                </table>
            </div>
            {{-- {{ $total=0 }}
            @for($i=0; $i<$jmlRandom; $i++) {{ $total=$total+$demandResult[$i] }} @endfor {{ $average=$total /
                $jmlRandom }} --}} @php $total=0; for($i=0; $i<$jmlRandom; $i++): $total=$total+$demandResult[$i];
                endfor; $average=$total / $jmlRandom; @endphp <h5>
                <center>Rata-rata jumlah permintaan : <b>
                        {{ $average }}
                    </b></center>
                </h5>
                <div class="navbar-nav justify-content-end mt-4" style="align-items:center;">
                    <input type=" button" name="kembali" value="Kembali" onClick="javascript:history.back()"
                        class="btn btn-success">
                </div>
        </div>
    </div>
    </div>
    </div>
</main>
@endsection