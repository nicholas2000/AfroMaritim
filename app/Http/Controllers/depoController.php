<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Depo;

class depoController extends Controller
{

 public function show()
    {
        $arrDepo=Depo::all();
        return view('admin.mDepo',compact('arrDepo'));
        $newTrans = "";
        if($totalTrans<10){
            $newTrans = "{$first}-00{$totalTrans}";
        }else if($totalTrans<100){
            $newTrans = "{$first}-0{$totalTrans}";
        }else{
            $newTrans = "{$first}-{$totalTrans}";
        }
        $param['kodeTrans'] = $newTrans;
        $param['total'] = $totalTrans;
    }

    public function doAddDepo(Request $req)
    {

        Depo::create([
            'tanggal' => $req->tglmasuk,
            'no_transaksi' => $req->notransaksi,
            'nama_penerima'=> $req->namapenerima,
            'nama_pengirim'=>$req->namapengirim,
            'nama_barang'=>$req->namabarang,
            'no_resi'=>$req->noresi,
            'no_container'=>$req->nocontainer
        ]);
        return redirect('/depo');
    }
}
