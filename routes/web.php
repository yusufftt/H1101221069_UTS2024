<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/testing', function () {
    return view('testing');
});

Route::get('/pegawai', function () {
    return view('pegawai');
});

Route::get('/masterjabatan', function () {
    return view('masterjabatan');
});

Route::get('/pendidikan', function () {
    return view('pendidikan');
});


