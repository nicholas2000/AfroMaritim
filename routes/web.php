<?php

use App\Http\Controllers\CabangController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\controllerpegawai;
use App\Http\Controllers\KompetitorController;
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
Route::get('/tpegawai', function () {
    return view('admin.mTpegawai');
});

Route::get('/tkompetitor', function () {
    return view('admin.mTkompetitor');
});
Route::get('/tcustomer', function () {
    return view('admin.mTcustomer');
});
// ROUTE BARUU


Route::get('/masterCustomer', function () {
    return view('admin.mCustomer');
});

Route::post('/doAddcabang', [CabangController::class, "doAdd"]);
Route::get('/masterCabang', [CabangController::class, "show"]);

Route::post('/doAddkompetitor', [KompetitorController::class, "doAdd"]);
Route::get('/masterKompetitor', [KompetitorController::class, "show"]);

Route::post('/dotmpegawai', [controllerpegawai::class, "dovmtpegawai"]);
Route::get('/masterPegawai', [controllerpegawai::class, "vmpegawai"]);

Route::get('/masterTeam', function () {
    return view('admin.mTeampengiriman');
});

Route::get('/masterTransaksi', function () {
    return view('admin.mTransaksi');
});

Route::get('/masterHistory', function () {
    return view('admin.mHistory');
});

Route::get('/masterStatus', function () {
    return view('admin.mStatus');
});

Route::get('/masterPiutang', function () {
    return view('admin.mPiutang');
});



// Route::post('/doketambahpo', [Controller::class, "ketambahvmpo"]);

// Route::get('/tambahpo', [Controller::class, "tambahvmpo"]);
// Route::post('/dotambavmpo', [Controller::class, "ketambahvmpo"]);


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
