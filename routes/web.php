<?php




use Illuminate\Support\Facades\Route;
use App\Http\Controllers\asetController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\userController;
use App\Http\Controllers\cabangController;
use App\Http\Controllers\CategoryController;
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


Route::middleware(["auth", "roles:admin,manager,gm,branch"])
    ->group(function () {

        //route Dashboard----------------------------------------------------------------------
        Route::get('/', [dashboardController::class, 'index']);
        // -------------------------------------------------------------------------------------

        Route::get('/aset', [asetController::class, 'index'])->name('aset');
        Route::group([
            "controller" => CategoryController::class,
            "prefix" => "categories",
            "as" => "category.",
            "middleware" => "prevent_roles:branch"
        ], function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/', 'store')->name('store');
            Route::get('/edit/{id}', 'edit')->name('edit');
            Route::patch('/{id}', 'update')->name('update');
        });
        Route::middleware("prevent_roles:gm,branch")->group(
            function () {
                //route Aset----------------------------------------------------------------------
                Route::get('/aset/add_aset', [asetController::class, 'addform'])->name('add.aset');
                Route::get('/aset/edit_aset/{id}', [asetController::class, 'editForm'])->name('edit.aset');
                Route::patch('/aset/{id}', [asetController::class, 'update'])->name('update.aset');
                Route::post('/aset/store_aset', [asetController::class, 'store'])->name('store.aset');
                Route::delete('/aset/delete_aset/{id}', [asetController::class, 'destroy'])->name('destroy.aset');
            }
        );
        // -------------------------------------------------------------------------------------

        //route Monitoring----------------------------------------------------------------------
        Route::get('/monitoring', [monitoringController::class, 'index'])->middleware("prevent_roles:branch")->name('monitoring');;
        // -------------------------------------------------------------------------------------

        //route Rekomendasi----------------------------------------------------------------------
        Route::get('/rekomendasi', [rekomendasiController::class, 'index'])->middleware("prevent_roles:branch")->name('rekomendasi');;
        // -------------------------------------------------------------------------------------

        // route Cabang----------------------------------------------------------------------

        Route::get('/cabang', [cabangController::class, 'index'])->name('cabang')->middleware("prevent_roles:branch");;
        Route::middleware("prevent_roles:manager,gm,branch")->group(
            function () {
                Route::get('/cabang/add_cabang', [cabangController::class, 'addform'])->name('add.cabang');
                Route::get('/cabang/edit_cabang/{id}', [cabangController::class, 'editform'])->name('edit.cabang');
                Route::post('/cabang/store_cabang', [cabangController::class, 'store'])->name('store.cabang');
                Route::patch('/cabang/update_cabang/{id}', [cabangController::class, 'update'])->name('update.cabang');
                Route::delete('/cabang/{id}', [cabangController::class, 'destroy'])->name('delete.cabang');
            }
        );

        // -------------------------------------------------------------------------------------

        //route User----------------------------------------------------------------------
        Route::get('/user', [userController::class, 'index'])->name('user')->middleware("prevent_roles:branch");;
        Route::middleware("prevent_roles:gm,branch")->group(
            function () {
                Route::get('/user/add_user', [userController::class, 'addform'])->name('add.user');
                Route::post('/user/store_user', [userController::class, 'store'])->name('store.user');
                Route::get('/user/edit_user/{id}', [userController::class, 'edit'])->name('edit.user');
                Route::post('/user/{id}', [userController::class, 'update'])->name('users.update');
            }
        );
        // -------------------------------------------------------------------------------------
        Route::get('/pengajuan', [pengajuanController::class, 'index'])->name('pengajuan');
        Route::get('/pengajuan/add_pengajuan', [pengajuanController::class, 'create'])->name('create.pengajuan');
        Route::post('/pengajuan/store_pengajuan', [pengajuanController::class, 'store'])->name('store.pengajuan');
        Route::patch("/pengajuan/ganti_status/{id}", [pengajuanController::class, 'update'])->name("update.pengajuan")->middleware("prevent_roles:admin,branch,manager");
        // -------------------------------------------------------------------------------------

        //route Detail User----------------------------------------------------------------------
        Route::get('/detail_user', [detail_userController::class, 'index'])->middleware("prevent_roles:branch");
        // -------------------------------------------------------------------------------------
    });
