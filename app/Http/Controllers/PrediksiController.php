<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrediksiController extends Controller
{
    public function index()
    {
        return view('prediksi/index');
    }

    public function proses()
    {
        // dd($_POST);
        return view(
            'prediksi/proses',
            [
                'jumlah' => $_POST['jumlah']
            ]
        );
    }

    public function proses2()
    {
        // dd($_POST);
        $demand = $_POST['demand'];
        $freq = $_POST['freq'];
        $total = 0;
        $probability[-1] = 0;
        $cumulative[-1] = 0;
        $amount = count($freq);
        $botInterval = [];
        $topInterval = [];

        //menghitung total frekuensi permintaan
        for ($i = 0; $i < count($freq); $i++) {
            $total = $total + $freq[$i];
        }

        //menghitung peluang/kemungkinan terjadinya permintaan
        for ($i = 0; $i < count($freq); $i++) {
            $probability[$i] = round($freq[$i] / $total, 3);
            $cumulative[$i] =  round($cumulative[$i - 1] + $probability[$i], 3);
        }

        //menghitung panjang angka dibelakang koma
        $length = 0;
        for ($i = 0; $i < count($freq); $i++) {
            if ($length < strlen($cumulative[$i])) {
                $length = strlen($cumulative[$i]) - 2;
            }
        }

        //menghitung interfal paling bawah
        $lowestInterval = 1;
        for ($j = 0; $j < $length; $j++) {
            $lowestInterval = $lowestInterval / 10;
        }

        $lowestInterval = round($lowestInterval, 3);

        //menentukan interval bawah dan atas pertama
        $botInterval[0] = $lowestInterval;
        $topInterval[0] = $cumulative[0];

        //menentukan interval bawah dan atas
        for ($i = 1; $i < count($freq); $i++) {
            $botInterval[$i] = round($topInterval[$i - 1] + $lowestInterval, 3);
            $topInterval[$i] = round($cumulative[$i], 3);
        }

        //menghitung untuk perkalian desimal agar bisa digunakan untuk interval bilangan acak
        $pangkat = 1;
        for ($j = 0; $j < $length; $j++) {
            $pangkat = $pangkat * 10;
        }
        // dd($demand, $freq, $probability, $cumulative, $topInterval, $botInterval);
        return view(
            'prediksi/proses2',
            [
                'jumlah' => $_POST['jumlah'],
                'demand' => $demand,
                'freq' => $freq,
                'amount' => $amount,
                'pangkat' => $pangkat,
                'probability' => $probability,
                'cumulative' => $cumulative,
                'lowestInterval' => $lowestInterval,
                'topInterval' => $topInterval,
                'botInterval' => $botInterval,
            ]
        );
    }

    public function hasil()
    {
        // dd($_POST);
        $jmlRandom = $_POST['jmlRandom'];
        $x0 = $_POST['x0'];
        $a = $_POST['a'];
        $c = $_POST['c'];
        $m = $_POST['m'];
        $angka_random = [];
        $hasil = [];
        $hasil[0] = $x0;
        $pangkat = $_POST['pangkat'];
        $amount = $_POST['amount'];
        $lowestInterval = $_POST['lowestInterval'];
        $dem = $_POST['demand'];
        $demand = unserialize(base64_decode($dem));
        $botInt = $_POST['botInterval'];
        $botInterval = unserialize(base64_decode($botInt));
        $topInt = $_POST['topInterval'];
        $topInterval = unserialize(base64_decode($topInt));
        $demandResult = [];

        // dd($demand, $hasil);
        return view(
            'prediksi/hasil',
            [
                'jmlRandom' => $jmlRandom,
                'a' => $a,
                'c' => $c,
                'm' => $m,
                'angka_random' => $angka_random,
                'hasil' => $hasil,
                'pangkat' => $pangkat,
                'amount' => $amount,
                'lowestInterval' => $lowestInterval,
                'demand' => $demand,
                'demandResult' => $demandResult,
                'topInterval' => $topInterval,
                'botInterval' => $botInterval,
            ]
        );
    }
}
