<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('/');

Route::get('/unggulan', function () {
    return view('unggulan');
})->name('unggulan');

Route::get('/reguler9hari', function () {
    return view('reguler9');
})->name('reguler9');

Route::get('/reguler12hari', function () {
    return view('reguler12');
})->name('reguler12');

Route::get('/umrohpluswisata', function () {
    return view('umrohwisata');
})->name('umrohwisata');

Route::get('/hajikhusus', function () {
    return view('hajikhusus');
})->name('hajikhusus');

Route::get('/umrohramadhan', function () {
    return view('umrohramadhan');
})->name('umrohramadhan');

Route::get('/galeri', function () {
    return view('galeri');
})->name('galeritestimoni');

Route::get('/travel', function () {
    return view('travel');
})->name('mitratravel');

Route::get('/haramainku', function () {
    return view('haramainku');
})->name('haramainku');

Route::get('/contohproduk', function () {
    return view('produk');
})->name('produk');

