<?php




use Illuminate\Support\Facades\Route;
use App\Http\Controllers\asetController;
use App\Http\Controllers\userController;
use App\Http\Controllers\cabangController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\pengajuanController;
use App\Http\Controllers\monitoringController;
use App\Http\Controllers\rekomendasiController;
use App\Http\Controllers\detail_userController;

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

Route::get('/', [dashboardController::class, 'index']);

Route::get('/aset', [asetController::class, 'index']);

Route::get('/monitoring', [monitoringController::class, 'index']);

Route::get('/rekomendasi', [rekomendasiController::class, 'index']);

Route::get('/cabang', [cabangController::class, 'index']);

Route::get('/user', [userController::class, 'index']);

Route::get('/pengajuan', [pengajuanController::class, 'index']);

Route::get('/detail_user', [detail_userController::class, 'index']);
