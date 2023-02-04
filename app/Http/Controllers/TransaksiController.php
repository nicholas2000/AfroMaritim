<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function showtransaksi(Request $req)
    {
        return view('admin/mTransaksi');
    }

    public function doAdd(Request $req)
    {
        dd("albert kampret");
    }
}
