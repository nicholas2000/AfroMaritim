<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Depo;
use App\Models\Transaksi;
use App\Models\modelJenisHarga;

class depoController extends Controller
{

 public function show()
    {
        $arrDepo=Depo::all();

        $Transaksi = Transaksi::all();
        $param['arrJenisHarga']=modelJenisHarga::get();
        // $param['totalTrans']=Transaksi::where('nomor_transaksi', 'like', '%TC%');
        // // $param['kodeTrans']=Transaksi::where
        // $mytime = Carbon::now()->format('m-Y');
        // $param['time'] = $mytime->toDateTimeString();
        $time = date('y-m');
        $first = "TC{$time}";
        $totalTrans = Transaksi::where('nomor_transaksi', 'like', "%{$first}%")->count() + 1;
        // dd($totalTrans);
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
        return view('admin.mDepo',compact('Transaksi'),$param);
    }

    public function doAddDepo(Request $req)
    {
        Transaksi::create([
            'tanggal' => $req->tglmasuk,
            'nomor_transaksi' => $req->notransaksi,
            'nama_pengirim'=>$req->namapengirim,
            'alamat_pengirim'=>$req->alamatpengirim,
            'nohp_pengirim'=>$req->nohppengirim,
            'email_pengirim'=>$req->emailpengirim,
            'nama_penerima'=> $req->namapenerima,
            'nama_barang'=>$req->namabarang,
            'nomor_resi'=>$req->noresi,
            'nomor_container'=>$req->nocontainer,
            'status_barang' => 'Depo SBY',
        ]);
        return redirect('/depo');
        // }
    }
}
