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
        $data = json_decode($request->data);
        foreach ($data as $prm) {
            Transaksi::where('nomor_transaksi',$prm)->update([
                'nomor_manifest' => $request->nmanifest,
                'nomor_container'=> $request->ncontainer,
                'nama_kapal'=> $request->nkapal,
                'nomor_segel'=> $request->nomor_segel
            ]);
        }

        return redirect('/masterHistory');
    }

}
