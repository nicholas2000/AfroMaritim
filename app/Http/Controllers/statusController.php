<?php

namespace App\Http\Controllers;
use App\Models\Transaksi;

use App\Models\Activity;
use App\Models\modelpegawai;
use App\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class statusController extends Controller
{
    //
    public function showStatus()
    {
        $arrTransaksi=Transaksi::all();
        return view('admin.mStatus',compact('arrTransaksi'));
    }
    public function searchTanggal(Request $req)
    {
        $tanggal_awal=$req->date_awal;
        $tanggal_akhir=$req->date_akhir;
        $arrTransaksi=Transaksi::whereBetween('tanggal', [$req->get('date_awal'), $req->get('date_akhir')])->get();
        return view('admin.mStatus',compact('arrTransaksi'));
    }
}
