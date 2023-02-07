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
        // $length = Transaksi::count();
        Transaksi::where('nomor_transaksi',$id)->delete();
        // $trans = Transaksi::all();
        // for ($i=intval(substr($id, 2))-1; $i<$length; $i++) {
        //     if($i<10){
        //         $temp = "TC00{$i}";
        //     }else if($i<100){
        //         $temp = "TC0{$i}";
        //     }else{
        //         $temp = "TC{$i}";
        //     }
        //     Transaksi::where('nomor_transaksi',$trans.get($i)->transaksi)->update([
        //         'nomor_transaksi' => $temp,
        //     ]);
        // }
        return redirect('/masterHistory');
    }
    public function updatehistory(Request $request)
    {
        $data = json_decode($request->data);

        foreach ($data as $prm) {
            Transaksi::where('nomor_transaksi',$prm)->update([
                'nomor_manifest' => $request->nmanifest,
                'nomor_container'=> $request->ncontainer,
                'nama_kapal'=> $request->nkapal
            ]);
        }

        return redirect('/masterHistory');
    }

}
