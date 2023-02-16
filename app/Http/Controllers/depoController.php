<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Depo;

class depoController extends Controller
{

    public function showDepo()
    {
        $arrDepo=depo::all();
        return view('admin.mDepo',compact('arrDepo'));
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
        return redirect("/depo");
    }
}
