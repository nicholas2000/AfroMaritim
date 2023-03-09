<?php

use App\Http\Controllers\activitycontroller;
use App\Http\Controllers\CabangController;
use App\Http\Controllers\containercontroller;
use App\Http\Controllers\Controller;
use App\Http\Controllers\controllerJenisHarga;
use App\Http\Controllers\controllerpegawai;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\depoController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\KompetitorController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\pengirimancontroller;
use App\Http\Controllers\statusController;
use App\Http\Controllers\TransaksiController;
use App\Models\Kompetitor;
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


Route::get('/', [loginController::class, "toLoginPage"]);
Route::middleware(['login','superadmin'])->group(function () {
    Route::get('/formactivity', [activitycontroller::class, "formact"]);
});

Route::get('/logout', [loginController::class, "logout"]);

Route::middleware('login')->group(function () {
    Route::get('/dashboard', function () {
        return view('sidebar.dashboard');
    });
});

Route::get('/hutang', function () {
    return view('form.formHutang');
});





// Route::get('/masterContainer', function () {
//     return view('form.formContainer');
// });

// ROUTE BARUU
Route::get('/masterStatus', [statusController::class, "showStatus"]);
Route::get('/search_tanggal', [statusController::class, "searchTanggal"]);

Route::get('/login', [loginController::class, "login"]);

Route::middleware(['login','mastercabang'])->group(function () {
    Route::post('/doAddcabang', [CabangController::class, "doAdd"]);
    Route::get('/masterCabang', [CabangController::class, "show"]);
    Route::post('/masterCabang/edit', [CabangController::class, "doEdit"]);
    Route::post('/masterCabang/delete/{id}', [CabangController::class, "delete"]);
    Route::get('/tcabang', function () {
        return view('admin.mTcabang');
    });
});

Route::middleware(['login','mastercustomer'])->group(function () {
    Route::post('/doAddcustomer', [CustomerController::class, "doAdd"]);
    Route::get('/masterCustomer', [CustomerController::class, "show"]);
    Route::get('/tcustomer',  [CustomerController::class, "vfmcustomer"]);
    Route::post('/masterCustomer/edit', [CustomerController::class, "doEdit"]);
    Route::post('/masterCustomer/delete/{id}', [CustomerController::class, "delete"]);
});

Route::middleware(['login','masterkompetitor'])->group(function () {
    Route::post('/doAddkompetitor', [KompetitorController::class, "doAdd"]);
    Route::get('/masterKompetitor', [KompetitorController::class, "show"]);
    Route::get('/tkompetitor', function () {
        return view('admin.mTkompetitor');
    });
    Route::post('/masterKompetitor/delete/{id}', [KompetitorController::class, "delete"]);
    Route::post('/masterKompetitor/update', [KompetitorController::class, "update"]);
});

Route::middleware(['login','masterpegawai'])->group(function () {
    Route::post('/dotmpegawai', [controllerpegawai::class, "dovmtpegawai"]);
    Route::get('/masterPegawai', [controllerpegawai::class, "vmpegawai"]);
    Route::get('/tpegawai',  [controllerpegawai::class, "vfmpegawai"]);
    Route::post('/masterPegawai/delete/{id}', [controllerpegawai::class, "deletepegawai"]);
    Route::post('/masterPegawai/update', [controllerpegawai::class, "updatepegawai"]);
});

Route::middleware(['login','masterjenisharga'])->group(function () {
    Route::get('/masterJenisharga', [controllerJenisHarga::class, "show"]);
    Route::post('/domasterJenisharga', [controllerJenisHarga::class, "doAdd"]);
});

Route::get('/masterpengirimansatu', [pengirimancontroller::class, "vmpengirimansatu"]);
Route::get('/masterpengirimandua', [pengirimancontroller::class, "vmpengirimandua"]);
Route::get('/activity', [activitycontroller::class, "formact"]);

Route::get('/depo', [depoController::class, "show"]);
Route::post('/tambahDepo', [depoController::class, "doAddDepo"]);
Route::post('/editDepo', [depoController::class, "doEdit"]);
Route::post('/cekDepo/{id}', [depoController::class, "cek"]);
Route::post('/formDepo/delete/{id}', [depoController::class, "delete"]);

// <-------------->

Route::middleware(['login','transaksi'])->group(function () {
    Route::post('/doMasterTransaksi', [TransaksiController::class, "doAdd"]);
    Route::get('/masterTransaksi', [TransaksiController::class, "showtransaksi"]);
});

Route::middleware(['login','history'])->group(function () {
    Route::post('/masterHistory/delete/{id}', [HistoryController::class, "deletehistory"]);
    Route::post('/masterHistory/update', [HistoryController::class, "updatehistory"]);
    Route::get('/masterHistory', [TransaksiController::class, "showHistory"]);
});


Route::get('/masterTeam', function () {
    return view('admin.mTeampengiriman');
});

// Route::get('/masterStatus', function () {
//     return view('admin.mStatus');
// });

Route::get('/masterPiutang', function () {
    return view('admin.mPiutang');
});

Route::get('/masterContainer', [containercontroller::class, "show"]);
Route::post('/doaddcontainer', [containercontroller::class, "doAdd"]);
Route::post('/masterContainer/lock/{id}', [containercontroller::class, "lock"]);
Route::post('/masterContainer/unlock/{id}', [containercontroller::class, "unlock"]);
// Route::get('/tcontainer',  [KompetitorController::class, "vfmkompetitor"]);
Route::get('/tcontainer', function () {
    return view('admin.mTContainer');
});
