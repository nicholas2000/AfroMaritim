<?php

use App\Http\Controllers\activitycontroller;
use App\Http\Controllers\CabangController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\controllerJenisHarga;
use App\Http\Controllers\controllerpegawai;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\KompetitorController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\pengirimancontroller;
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

Route::get('/', function () {
    return view('login');
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
Route::get('/tcabang', function () {
    return view('admin.mTcabang');
});

Route::get('/tkompetitor', function () {
    return view('admin.mTkompetitor');
});

// ROUTE BARUU


Route::get('/login', [loginController::class, "login"]);

Route::middleware(['login','superadmin'])->group(function () {
    Route::post('/doAddcustomer', [CustomerController::class, "doAdd"]);
    Route::get('/masterCustomer', [CustomerController::class, "show"]);
    Route::get('/tcustomer',  [CustomerController::class, "vfmcustomer"]);
    Route::post('/masterCustomer/edit', [CustomerController::class, "doEdit"]);
    Route::post('/masterCustomer/delete/{id}', [CustomerController::class, "delete"]);

    Route::post('/doAddcabang', [CabangController::class, "doAdd"]);
    Route::get('/masterCabang', [CabangController::class, "show"]);
    Route::post('/masterCabang/edit', [CabangController::class, "doEdit"]);
    Route::post('/masterCabang/delete/{id}', [CabangController::class, "delete"]);

    Route::post('/doAddkompetitor', [KompetitorController::class, "doAdd"]);
    Route::get('/masterKompetitor', [KompetitorController::class, "show"]);
    Route::post('/masterKompetitor/delete/{id}', [KompetitorController::class, "delete"]);
    Route::post('/masterKompetitor/update', [KompetitorController::class, "update"]);

    Route::post('/dotmpegawai', [controllerpegawai::class, "dovmtpegawai"]);
    Route::get('/masterPegawai', [controllerpegawai::class, "vmpegawai"]);
    Route::get('/tpegawai',  [controllerpegawai::class, "vfmpegawai"]);
    Route::post('/masterPegawai/delete/{id}', [controllerpegawai::class, "deletepegawai"]);
    Route::post('/masterPegawai/update', [controllerpegawai::class, "updatepegawai"]);

    Route::get('/formStatus', [pengirimancontroller::class, "showHistory"]);

    Route::post('/domasterJenisharga', [controllerJenisHarga::class, "doAdd"]);
    Route::get('/masterJenisharga', [controllerJenisHarga::class, "show"]);
});




Route::get('/masterpengirimansatu', [pengirimancontroller::class, "vmpengirimansatu"]);
Route::get('/masterpengirimandua', [pengirimancontroller::class, "vmpengirimandua"]);
Route::get('/activity', [activitycontroller::class, "formact"]);


// <-------------->

Route::middleware(['login','admin'])->group(function () {
    Route::post('/doMasterTransaksi', [TransaksiController::class, "doAdd"]);
    Route::get('/masterTransaksi', [TransaksiController::class, "showtransaksi"]);

    Route::post('/masterHistory/delete/{id}', [HistoryController::class, "deletehistory"]);
    Route::post('/masterHistory/update', [HistoryController::class, "updatehistory"]);
    Route::get('/masterHistory', [TransaksiController::class, "showHistory"]);
});


Route::get('/masterTeam', function () {
    return view('admin.mTeampengiriman');
});

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
