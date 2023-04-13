<?php

namespace App\Http\Controllers;

use App\Models\Container;
use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\LogUserModel;

class notifikasiController extends Controller
{
    public function show(Request $req)
    {
        $arrNotif=LogUserModel::all();
        dd($arrNotif);
        return view('sidebar.dashboard',compact("arrNotif"));
    }
}
