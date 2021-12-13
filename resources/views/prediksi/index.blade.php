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
                    <h2>Awal</h2>
                </div>
                <p>Silahkan masukkan jumlah data permintaan!</p>
                <div class="col-lg-10 mx-2">
                    <div class=" form-group" style="display:flex;">
                        <form action="/prediksi/proses" method="post">
                            @csrf
                            <table class="custom-padding-table">
                                <tr>
                                    <td>Jumlah data</td>
                                    <td>:</td>
                                    <td><input type="number" min="0" name="jumlah" class="form-control" required=""
                                            oninvalid="this.setCustomValidity('Harap diisi!')"
                                            oninput="setCustomValidity('')" autofocus></td>
                                </tr>
                                <div class="input-group-btn">
                                    <td><input type="submit" value="Ok" class="btn btn-primary"></td>
                                </div>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</main>
@endsection