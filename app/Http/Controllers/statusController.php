<?php

namespace App\Http\Controllers;
use App\Models\Transaksi;

use Illuminate\Http\Requst;

class statusController extends Controller
{
    //
    public function showStatus()
    {
        $arrTransaksi=Transaksi::all();
        return view('admin.mStatus',compact('arrTransaksi'));
    }
}
