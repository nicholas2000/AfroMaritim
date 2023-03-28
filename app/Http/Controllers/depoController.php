<?php

namespace App\Http\Controllers;

use App\Models\Container;
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
        // $time = date('y-m');
        // $first = "TC{$time}";
        // $totalTrans = Transaksi::where('nomor_transaksi', 'like', "%{$first}%")->count() + 1;
        // // dd($totalTrans);
        // $newTrans = "";
        // if($totalTrans<10){
        //     $newTrans = "{$first}-00{$totalTrans}";
        // }else if($totalTrans<100){
        //     $newTrans = "{$first}-0{$totalTrans}";
        // }else{
        //     $newTrans = "{$first}-{$totalTrans}";
        // }
        // $param['kodeTrans'] = $newTrans;
        // $param['total'] = $totalTrans;
        return view('admin.mDepo',compact('Transaksi'),$param);

    }

    public function doAddDepo(Request $req)
    {
        Transaksi::create([
            'tanggal' => $req->tglmasuk,
            // 'nomor_segel' => $req->nomor_segel,
            'nama_pengirim'=>$req->namapengirim,
            'alamat_pengirim'=>$req->alamatpengirim,
            'nohp_pengirim'=>$req->nohppengirim,
            'email_pengirim'=>$req->emailpengirim,
            'nama_penerima'=> $req->namapenerima,
            'jenis_barang'=>$req->jenis_barang,
            'nomor_resi'=>$req->noresi,
            'nomor_container'=>$req->contSearch,
            'jumlah_barang' => $req->colly,
            'volume' => $req->volume,
            'harga_kubik' => '0',
            'harga' => '0',
            'harga_tambahan' => '0',
            'harga_potongan' => '0',
            'total_harga' => '0',
            'status_barang' => 'Depo',
            'catatan' => $req->catatan,
        ]);
        if($req->final=="yes"){
            $close_container = Container::find($req->contSearch);
            $close_container->update(['status' => '0']);
        }
        return redirect('/depo');
    }
    public function doEdit(Request $req){
        $depo = Transaksi::withTrashed()->find($req->nomor_resi);
        $result = $depo->update([
            'nama_pengirim'=>$req->nama_pengirim,
            'nama_penerima'=> $req->nama_penerima,
            'jenis_barang'=>$req->jenis_barang,
            'nomor_resi'=>$req->nomor_resi,
            'nomor_container'=>$req->nomor_container,
            'status_barang' => 'Depo SBY',

            ]);

        if($result){
            return redirect('/depo');
        }else{
            return redirect('/depo');
        }
    }

    public function delete($id)
    {
        $depo = Transaksi::withTrashed()->find($id);
        if($depo->trashed()){
            $result = $depo->restore();
        }else{
            $result = $depo->delete();
        }

        if ($result) {
            return redirect('/depo');
        } else {
            return redirect('/depo');
        }
    }
}
