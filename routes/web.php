<?php

use App\Http\Controllers\CabangController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\controllerJenisHarga;
use App\Http\Controllers\controllerpegawai;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\KompetitorController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\TransaksiController;
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
    return view('login');
});

Route::get('/dashboard', function () {
    return view('sidebar.dashboard');
});

Route::get('/hutang', function () {
    return view('form.formHutang');
});
Route::get('/tcabang', function () {
    return view('admin.mTcabang');
});

Route::get('/tkompetitor', function () {
    return view('admin.mTkompetitor');
});

// ROUTE BARUU


Route::get('/login', [loginController::class, "login"]);

Route::post('/doAddcustomer', [CustomerController::class, "doAdd"]);
Route::get('/masterCustomer', [CustomerController::class, "show"]);
Route::get('/tcustomer',  [CustomerController::class, "vfmcustomer"]);

Route::post('/doAddcabang', [CabangController::class, "doAdd"]);
Route::get('/masterCabang', [CabangController::class, "show"]);
Route::get('/editCabang/{id}',[CabangController::class, "edit"]);

Route::post('/doAddkompetitor', [KompetitorController::class, "doAdd"]);
Route::get('/masterKompetitor', [KompetitorController::class, "show"]);

Route::post('/dotmpegawai', [controllerpegawai::class, "dovmtpegawai"]);
Route::get('/masterPegawai', [controllerpegawai::class, "vmpegawai"]);
Route::get('/tpegawai',  [controllerpegawai::class, "vfmpegawai"]);
Route::post('/masterPegawai/delete/{id}', [controllerpegawai::class, "deletepegawai"]);
Route::post('/masterPegawai/update', [controllerpegawai::class, "updatepegawai"]);




// <-------------->
Route::post('/doMasterTransaksi', [TransaksiController::class, "doAdd"]);
Route::get('/masterTransaksi', [TransaksiController::class, "showtransaksi"]);


Route::get('/masterTeam', function () {
    return view('admin.mTeampengiriman');
});

// Route::post('/doMasterTransaksi', [TransaksiController::class, "doAdd"]);
Route::get('/masterHistory', [TransaksiController::class, "showHistory"]);
// Route::get('/masterHistory', function () {
//     return view('admin.mHistory');
// });

Route::get('/masterStatus', function () {
    return view('admin.mStatus');
});


Route::get('/masterPiutang', function () {
    return view('admin.mPiutang');
});

Route::get('/masterPenerimaanbarang', function () {
    return view('admin.mPenerimaanbarang');
});
Route::get('/masterPenawaran', function () {
    return view('admin.mPenawaran');
});
Route::get('/masterPo', function () {
    return view('admin.mPo');
});

Route::get('/masterBox', function () {
    return view('admin.mBox');
});

Route::get('/tambahpenerimaanbarang', function () {
    return view('admin.mTambahbarang');
});

Route::get('/tambahPo', function () {
    return view('admin.mTambahPo');
});
Route::get('/historypenawaran', function () {
    return view('admin.mHistoryPenawaran');
});
Route::get('/tambahformnopo', function () {
    return view('admin.mTambahFormNoPo');
});

Route::get('/tambahsuratjalan', function () {
    return view('admin.mSuratJalan');
});
Route::post('/masterHistory/delete/{id}', [HistoryController::class, "deletehistory"]);
Route::post('/masterHistory/update', [HistoryController::class, "updatehistory"]);
Route::post('/masterHistory/check/{id}', [HistoryController::class, "check"]);


// Route::get('/masterJenisharga', function () {
//     return view('admin.mJenisharga');
// });
Route::get('/masterJenisharga', [controllerJenisHarga::class, "show"]);

//ROUTE BARU


// Route::group(['prefix' => 'dashboard'], function(){
//     Route::get('/formpegawai', function () {
//         return view('formMasterpegawai');
//     })->name('masterpegawai');
//     Route::get('/formcustomer', function () {
//         return view('formMastercustomer');
//     })->name('mastercustomer');
//     Route::get('/formsupplier', function () {
//         return view('formMastersupplier');
//     })->name('mastersupplier');
//     Route::get('/formbox', function () {
//         return view('formMasterbox');
//     })->name('masterbox');
//     Route::get('/formpenerimaanbarang', function () {
//         return view('formPenerimaanBarang');
//     })->name('penerimaanbarang');
//     Route::get('/formPenawaran', function () {
//         return view('offerform');
//     })->name('penawaranbarang');
//     Route::get('/ormPo', function () {
//         return view('FormPO');
//     })->name('formPO)');
// });
