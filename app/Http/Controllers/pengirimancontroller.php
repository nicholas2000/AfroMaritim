<?php

namespace App\Http\Controllers;

use App\Models\Container;
use App\Models\Pengiriman;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class pengirimancontroller extends Controller
{
    public function vmpengirimansatu()
    {
        $param['arrContainer'] = Container::where('status', 1)->get();
        // $param['arrContainer'] = Container::get();
        $param['arrHistory']=Transaksi::where('nomor_container', $param['arrContainer'])->get();
        return view('admin.mOpsi2',$param);
    }
    // public function filterGudang($nocont)
    // {
    //     $param['arrContainer'] = Container::where('status', 1)->get();
    //     $param['arrHistory']=Transaksi::where('nomor_container', $noc$nocontet();
    //     return view('admin.mOpsi2',$param);
    // }
    public function vmpengirimandua()
    {
        return view("admin.mOpsi2");
    }
}
