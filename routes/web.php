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
    return view('v_dafaset');
});

Route::get('/dafmonitoring', function () {
    return view('v_dafmonitoring');
});

Route::get('/dafrekomen', function () {
    return view('v_dafrekomen');
});

Route::get('/datacabang', function () {
    return view('v_datacabang');
});

Route::get('/datauser', function () {
    return view('v_datauser');
});

Route::get('/pengajuanganti', function () {
    return view('v_pengajuanganti');
});

Route::get('/pengajuanperbaikan', function () {
    return view('v_pengajuanperbaikan');
});

Route::get('/pengajuantambah', function () {
    return view('v_pengajuantambah');
});

Route::get('/users', function () {
    return view('v_users');
});
