<?php

namespace App\Http\Controllers;

use App\Models\Pengiriman;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class pengirimancontroller extends Controller
{
    public function vmpengirimansatu()
    {
        $param['arrHistory']=Transaksi::get();
        $param['pengiriman']=Pengiriman::get();
        return view('admin.mOpsi1',$param);
    }
    public function vmpengirimandua()
    {
        return view("admin.mOpsi2");
    }
}
