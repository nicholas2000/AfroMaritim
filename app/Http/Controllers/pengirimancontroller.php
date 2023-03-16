<?php

namespace App\Http\Controllers;

use App\Models\Container;
use App\Models\modelpegawai;
use App\Models\Pengiriman;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class pengirimancontroller extends Controller
{
    public function vmpengirimansatu()
    {
        $arrContainer = Container::where('status', 1)->get();
        $arrKurir = modelpegawai::where('role_pegawai', 'Kurir')->get();
        // $param['arrContainer'] = Container::get();
        // $param['arrHistory']=Transaksi::where('nomor_container', $param['arrContainer'])->get();
        return view('admin.mOpsi2',compact('arrContainer','arrKurir'));
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
