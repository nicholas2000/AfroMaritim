<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function show()
    {
        $param['arrHistory']=Transaksi::get();
        return view('admin.mHistory',$param);
    }
    public function deletehistory($id)
    {
        Transaksi::where('nomor_transaksi',$id)->delete();
        return redirect('/masterHistory');
    }
    public function updatehistory(Request $request)
    {
        Transaksi::where('nomor_transaksi',$request->namacust)->update([
            'nama_kapal' => $request->nkapal,
            'nomor_container'=> $request->ncontainer,
        ]);
        return redirect('/masterHistory');
    }

}
