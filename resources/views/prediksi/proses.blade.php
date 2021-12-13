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
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h2>Tahap 1</h2>
                </div>
                <div class="panel-body">
                    <div class="input-group">
                        <p>Silahkan masukkan data Permintaan sesuai dengan distribusi!</p>
                        <div class="table table-responsive">
                            <form action="/prediksi/proses2" method="post">
                                @csrf
                                <table class="mb-3">
                                    <thead class="table-primary">
                                        <tr>
                                            <th style="text-align:center">Permintaan</th>
                                            <th style="text-align:center">Frekuensi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @for($i = 0; $i < $jumlah; $i++) <tr>
                                            <td><input type=number min=0 name=demand[] placeholder="0"
                                                    class="form-control" required=""
                                                    oninvalid="this.setCustomValidity('Harap diisi!')"
                                                    oninput="setCustomValidity('')"></td>
                                            <td><input type=number min=1 name=freq[] placeholder="0"
                                                    class="form-control" required=""
                                                    oninvalid="this.setCustomValidity('Harap diisi!')"
                                                    oninput="setCustomValidity('')"></td>
                                            </tr>
                                            @endfor
                                    </tbody>
                                </table>
                                <input type="hidden" name="jumlah" value="{{ $jumlah }}">
                                <input type="submit" value="Hitung" name="submit" class="btn btn-primary"
                                    style="padding-left: 30px; padding-right: 30px;">
                                <input type="button" name="kembali" value="Kembali" onClick="javascript:history.back()"
                                    class="btn btn-success">
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</main>
@endsection