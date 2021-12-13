@extends('layouts.main')

@section('container')
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg mt-4">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl mt-4" id="navbarBlur"
        navbar-scroll="true">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <h4 class="font-weight-bolder mb-2">Metode LCG</h4>
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
                    <b>Metode Linear Congruent Generator (LCG)</b>
                    <p>Pada Simulasi Monte Carlo ini, kami menggunakan metode Linear Congruential Method. Linear
                        Congruent
                        Method (LCM) merupakan metode pembangkitkan bilangan acak yang banyak digunakan dalam program
                        komputer.
                        LCM memanfaatkan model linier untuk membangkitkan bilangan acak. Untuk menghasilkan urutan
                        bilangan
                        bulat X1, X2, ... antara 0 dan m -1 dengan mengikuti hubungan rekursif:</p>
                    <pre><b>Xn+1 = ((a*Xn)+c) mod m</b></pre>
                    <p> Di mana :
                    <ul>
                        <li>Xn = adalah bilangan acak ke n</li>
                        <li>a dan c adalah konstanta LCM</li>
                        <li>m adalah batas maksimum bilangan acak</li>
                    </ul>
                    </p>
                    <hr />
                    <p> Asumsikan: m > 0 dan a < m, c < m, X0 < m. Pemilihan nilai untuk a, c, m, dan X0 secara drastis
                            mempengaruhi sifat statistik dan panjang siklus. Bilangan bulat acak Xi dihasilkan pada [0,
                            m -1]. Kemudian mengkonversi bilangan bulat Xi menjadi bilangan acak</p>
                            <p> Ketentuan-ketentuan pemilihan setiap parameter pada persamaan di atas adalah sebagai
                                berikut
                                :
                            <ol>
                                <li>m = modulus, 0 < m</li>
                                <li>a = multiplier (pengganda), 0 < a < m</li>
                                <li>c = Increment (pertambahan nilai), 0 = c < m</li>
                                <li>X0 = nilai awal, 0 = X0 < m</li>
                                <li>c dan m merupakan bilangan prima relatif</li>
                                <li>a – 1 dapat dibagi oleh faktor prima dari m</li>
                                <li>a – 1 merupakan kelipatan 4 jika m juga kelipatan 4</li>
                                <li>a harus sangat besar</li>
                            </ol>
                    </p>
                    <p>Ciri khas dari LCM adalah terjadi pengulangan pada periode waktu tertentu atau setelah sekian
                        kali
                        pembangkitan, hal ini adalah salah satu sifat dari metode ini, dan pseudo random generator pada
                        umumnya.
                        Penentuan konstanta LCM (a, c dan m) sangat menentukan baik tidaknya bilangan acak yang
                        diperoleh
                        dalam
                        arti memperoleh bilangan acak yang seakan-akan tidak terjadi pengulangan.</p>
                    <p><b>LCG memiliki periode penuh jika dan hanya jika tiga kondisi berikut bertahan (Hull dan Dobell,
                            1962):</b>
                    <ol>
                        <li>Satu-satunya bilangan bulat positif yang (persis) membagi kedua m dan c adalah 1</li>
                        <li>Jika q adalah bilangan prima yang membagi m, maka q membagi a-1</li>
                        <li>Jika 4 membagi m, maka 4 membagi a-1</li>
                    </ol>
                    </p>
                    <div class="justify-content-end" style="float:right;">
                        <input type=" button" name="kembali" value="Kembali" onClick="javascript:history.back()"
                            class="btn btn-success">
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</main>
@endsection