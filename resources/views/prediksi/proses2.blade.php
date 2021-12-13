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
                <h2>Tahap 2</h2>
            </div>
            <div class="panel-body">
                <div class="input-group">
                    <p>Data Permintaan sesuai dengan distribusi</p>
                    <div class="table table-responsive">
                        <table>
                            <thead class="table-primary">
                                <tr>
                                    <th>Permintaan</th>
                                    <th>Kemungkinan Terjadi</th>
                                    <th>Kemungkinan Kumulatif</th>
                                    <th>Interval Bilangan Acak</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for ($i = 0; $i < count($freq); $i++) <tr>
                                    <td style="text-align:center"> {{ $demand[$i] }} </td>
                                    <td style="text-align:center"> {{ $probability[$i] }} </td>
                                    <td style="text-align:center"> {{ $cumulative[$i] }} </td>
                                    <td style="text-align:center">
                                        {{$botInterval[$i] . " - "}}
                                        {{$topInterval[$i]}}
                                    </td>
                                    </tr>
                                    @endfor
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="input-group">
                    <p>Silahkan masukkan data untuk menggunakan <a href="/metode-lcg"
                            style="text-decoration: none;">Metode
                            LCG</a></p>
                    <form action="/prediksi/hasil" method="post">
                        @csrf
                        <table class="custom-padding-table">
                            <tr>
                                <td>Masukan jumlah simulasi</td>
                                <td>:</td>
                                <td><input type="number" min="1" class="form-control" name="jmlRandom" required=""
                                        oninvalid="this.setCustomValidity('Harap diisi!')"
                                        oninput="setCustomValidity('')"></td>
                                <td width="200px"></td>
                                <td></td>
                                <td>Dengan Asumsi : </td>
                            </tr>
                            <tr>
                                <td>Masukan X0</td>
                                <td>:</td>
                                <td><input type="number" min="1" class="form-control" name="x0" required=""
                                        oninvalid="this.setCustomValidity('Harap diisi!')"
                                        oninput="setCustomValidity('')"></td>
                                <td width="200px"></td>
                                <td></td>
                                <td>X0 < m </td>
                            </tr>
                            <tr>
                                <td>Masukan a</td>
                                <td>:</td>
                                <td><input type="number" min="1" class="form-control" name="a" required=""
                                        oninvalid="this.setCustomValidity('Harap diisi!')"
                                        oninput="setCustomValidity('')"></td>
                                <td width="200px"></td>
                                <td></td>
                                <td>a < m </td>
                            </tr>
                            <tr>
                                <td>Masukan c</td>
                                <td>:</td>
                                <td><input type="number" min="1" class="form-control" name="c" required=""
                                        oninvalid="this.setCustomValidity('Harap diisi!')"
                                        oninput="setCustomValidity('')"></td>
                                <td width="200px"></td>
                                <td></td>
                                <td>c < m </td>
                            </tr>
                            <tr>
                                <td>Masukan m</td>
                                <td>:</td>
                                <td><input type="number" min="1" class="form-control" name="m" required=""
                                        oninvalid="this.setCustomValidity('Harap diisi!')"
                                        oninput="setCustomValidity('')"></td>
                                <td width="200px"></td>
                                <td></td>
                                <td>m > 0 </td>
                            </tr>
                            <input type="hidden" value="{{ $pangkat }}" name="pangkat">
                            <input type="hidden" value="{{ $jumlah }}" name="jumlah">
                            <input type="hidden" value="{{ $amount }}" name="amount">
                            <input type="hidden" value="{{ $lowestInterval }}" name="lowestInterval">
                            <input type="hidden" value="{{ print base64_encode(serialize($demand)) }}" name="demand">
                            <input type="hidden" value="{{ print base64_encode(serialize($botInterval)) }}"
                                name="botInterval">
                            <input type="hidden" value="{{ print base64_encode(serialize($topInterval)) }}"
                                name="topInterval">
                            <tr>
                                <td colspan="2"><input type="submit" value="Hitung" name="submit"
                                        class="btn btn-primary" style="padding-left: 30px; padding-right: 30px;">
                                    <input type="button" name="kembali" value="Kembali"
                                        onClick="javascript:history.back()" class="btn btn-success">
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection