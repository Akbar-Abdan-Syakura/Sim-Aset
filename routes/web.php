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
//route Dashboard----------------------------------------------------------------------
Route::get('/', [dashboardController::class, 'index']);
// -------------------------------------------------------------------------------------

//route Aset----------------------------------------------------------------------
Route::get('/aset', [asetController::class, 'index']);
// -------------------------------------------------------------------------------------

//route Monitoring----------------------------------------------------------------------
Route::get('/monitoring', [monitoringController::class, 'index']);
// -------------------------------------------------------------------------------------

//route Rekomendasi----------------------------------------------------------------------
Route::get('/rekomendasi', [rekomendasiController::class, 'index']);
// -------------------------------------------------------------------------------------

// route Cabang----------------------------------------------------------------------

Route::get('/cabang', [cabangController::class, 'index'])->name('cabang');

Route::get('/cabang/add_cabang', [cabangController::class, 'addform'])->name('add.cabang');
Route::get('/cabang/edit_cabang/{id}', [cabangController::class, 'formedit']);

Route::post('/cabang/store_cabang', [cabangController::class, 'store'])->name('store.cabang');
// Route::post('/update_cabang', [cabangController::class, 'update'])->name('update.cabang');

// -------------------------------------------------------------------------------------

//route User----------------------------------------------------------------------
Route::get('/user', [userController::class, 'index']);
// -------------------------------------------------------------------------------------

//route Pengajuan----------------------------------------------------------------------
Route::get('/pengajuan', [pengajuanController::class, 'index']);
Route::get('/status_pengajuan_setuju', [pengajuanController::class, 'setuju']);
Route::get('/status_pengajuan_tdksetuju', [pengajuanController::class, 'tdksetuju']);
// -------------------------------------------------------------------------------------

//route Detail User----------------------------------------------------------------------
Route::get('/detail_user', [detail_userController::class, 'index']);
// -------------------------------------------------------------------------------------