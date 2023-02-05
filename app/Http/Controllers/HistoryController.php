<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function show()
    {
        $param['arrHistory']=Transaksi::get();
        return view('admin.mHistory',$param);
    }

}
