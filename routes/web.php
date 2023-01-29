<?php




use Illuminate\Support\Facades\Route;
use App\Http\Controllers\asetController;
use App\Http\Controllers\Auth\AuthController;
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

Route::controller(AuthController::class)
    ->name('auth.')
    ->group(function () {
        Route::get("/login", 'login')->name('login');
        Route::post("/authenticate", 'authenticate')->name('authenticate');
        Route::post("/logout", 'logout')->name('logout');
    });


Route::middleware(["auth"])
    ->group(function () {
        //route Dashboard----------------------------------------------------------------------
        Route::get('/', [dashboardController::class, 'index']);
        // -------------------------------------------------------------------------------------

        //route Aset----------------------------------------------------------------------
        Route::get('/aset', [asetController::class, 'index'])->name('aset');
        Route::get('/aset/add_aset', [asetController::class, 'addform'])->name('add.aset');
        Route::get('/aset/edit_aset/{id}', [asetController::class, 'editForm'])->name('edit.aset');
        Route::patch('/aset/{id}', [asetController::class, 'update'])->name('update.aset');
        Route::post('/aset/store_aset', [asetController::class, 'store'])->name('store.aset');

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
        Route::get('/cabang/edit_cabang/{id}', [cabangController::class, 'editform'])->name('edit.cabang');

        Route::post('/cabang/store_cabang', [cabangController::class, 'store'])->name('store.cabang');
        Route::patch('/cabang/update_cabang/{id}', [cabangController::class, 'update'])->name('update.cabang');
        Route::delete('/cabang/{id}', [cabangController::class, 'destroy'])->name('delete.cabang');

        // -------------------------------------------------------------------------------------

        //route User----------------------------------------------------------------------
        Route::get('/user', [userController::class, 'index'])->name('user');
        Route::get('/user/add_user', [userController::class, 'addform'])->name('add.user');
        Route::post('/user/store_user', [userController::class, 'store'])->name('store.user');
        Route::get('/user/edit_user/{id}', [userController::class, 'edit'])->name('edit.user');
        Route::post('/user/{id}', [userController::class, 'update'])->name('users.update');
        // -------------------------------------------------------------------------------------

        //route Pengajuan----------------------------------------------------------------------
        Route::get('/pengajuan', [pengajuanController::class, 'index'])->name('pengajuan');
        Route::get('/status_pengajuan_setuju', [pengajuanController::class, 'setuju']);
        Route::get('/status_pengajuan_tdksetuju', [pengajuanController::class, 'tdksetuju']);
        // -------------------------------------------------------------------------------------

        //route Detail User----------------------------------------------------------------------
        Route::get('/detail_user', [detail_userController::class, 'index']);
        // -------------------------------------------------------------------------------------
    });
