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
    return view('v_dashboard');
});

Route::get('/dafaset', function () {
    return view('v_aset');
});

Route::get('/dafmonitoring', function () {
    return view('v_monitoring');
});

Route::get('/dafrekomen', function () {
    return view('v_rekomendasi');
});

Route::get('/datacabang', function () {
    return view('v_cabang');
});

Route::get('/datauser', function () {
    return view('v_user');
});

Route::get('/pengajuan', function () {
    return view('v_pengajuan');
});

Route::get('/users', function () {
    return view('v_users');
});
