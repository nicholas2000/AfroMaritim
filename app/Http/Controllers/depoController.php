<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Depo;
use App\Models\Transaksi;

class depoController extends Controller
{

 public function show()
    {
        $arrDepo=Depo::all();
        return view('admin.mDepo',compact('arrDepo'));
        $Transaksi = Transaksi::all();
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
