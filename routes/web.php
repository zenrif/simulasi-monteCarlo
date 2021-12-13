<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrediksiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/monte-carlo', function () {
    return view('monte-carlo');
});

Route::get('/metode-lcg', function () {
    return view('metode-lcg');
});

Route::get('/prediksi', [PrediksiController::class, 'index']);
Route::post('/prediksi/proses', [PrediksiController::class, 'proses']);
Route::post('/prediksi/proses2', [PrediksiController::class, 'proses2']);
Route::post('/prediksi/hasil', [PrediksiController::class, 'hasil']);
