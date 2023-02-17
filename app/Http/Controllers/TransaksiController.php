<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\modelJenisHarga;
use App\Models\Transaksi;
use App\Models\Depo;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function showHistory()
    {
        $param['arrHistory']=Transaksi::get();
        return view('admin.mHistory',$param);
    }
    public function showtransaksi(Request $req)
    {
        $param['arrJenisHarga']=modelJenisHarga::get();
        // $param['totalTrans']=Transaksi::where('nomor_transaksi', 'like', '%TC%');
        // // $param['kodeTrans']=Transaksi::where
        // $mytime = Carbon::now()->format('m-Y');
        // $param['time'] = $mytime->toDateTimeString();
        $time = date('y-m');
        $first = "TC{$time}";
        $totalTrans = Transaksi::where('nomor_transaksi', 'like', '%{$first}%')->count() + 1;
        $newTrans = "";
        if($totalTrans<10){
            $newTrans = "{$first}-00{$totalTrans}";
        }else if($totalTrans<100){
            $newTrans = "{$first}-0{$totalTrans}";
        }else{
            $newTrans = "{$first}-{$totalTrans}";
        }
        $param['kodeTrans'] = $newTrans;
        return view('admin/mTransaksi',$param);
    }

    public function doAdd(Request $req)
    {
        $berat = "";
        $volume = "";
        // if($req->option=="berat"){
            $req->validate(
                [
                    "namacust" => 'required',
                    // "namabarang" => 'required',
                    // "berat"=>'gt:0',
                    // "rute"=>'required',
                    // "harga"=>'required',
                    // "jenisharga" => 'required',
                    // "hargatambahan" => 'required',
                    // "persentase" => 'required',
                    // "tglberangkat" => 'required',
                ],
                [
                    "namacust.required" => 'Nama Customer Harus di isi',
                    // "namabarang.required" => 'Nama Barang Harus di isi',
                    // "berat.gt"=>'Berat Harus lebih dari 0',
                    // "rute.required"=>'Rute Harus di isi',
                    // "harga.required"=>'Harga Harus di isi',
                    // "jenisharga.required" => 'Jenis Harga Harus dipilih',
                    // "hargatambahan.required" => 'Harga Tambahan Harus di isi',
                    // "persentase.required" => 'Persentase Harus di isi',
                    // "tglberangkat.required" => 'Tanggal Berangkat Harus Terisi',
                ]
            );
        // }else if($req->option=="volume"){
        //     $req->validate(
        //         [
        //             "namacust" => 'required',
        //             "namabarang" => 'required',
        //             "volume" => 'gt:0',
        //             "rute"=>'required',
        //             "harga"=>'required',
        //             "jenisharga" => 'required',
        //             "hargatambahan" => 'required',
        //             "persentase" => 'required',
        //             "tglberangkat" => 'required',
        //         ],
        //         [
        //             "namacust.required" => 'Nama Customer Harus di isi',
        //             "namabarang.required" => 'Nama Barang Harus di isi',
        //             "volume.gt"=>'Volume Harus lebih dari 0',
        //             "rute.required"=>'Rute Harus di isi',
        //             "harga.required"=>'Harga Harus di isi',
        //             "jenisharga.required" => 'Jenis Harga Harus dipilih',
        //             "hargatambahan.required" => 'Harga Tambahan Harus di isi',
        //             "persentase.required" => 'Persentase Harus di isi',
        //             "tglberangkat.required" => 'Tanggal Berangkat Harus Terisi',
        //         ]
        //     );
        // }


        // $trans = Transaksi::withTrashed()->get();
        // $ctr = 1;
        // foreach($trans as $t){
        //     $ctr = intval(substr($t->nomor_transaksi, 2)) + 1;
        // }
        // if ($ctr < 10) {
        //     $kode = "TC00{$ctr}";
        // } else if($ctr < 100) {
        //     $kode = "TC0{$ctr}";
        // } else {
        //     $kode = "TC{$ctr}";
        // }
        // $idadmpalsu="admin";
        $namacust = $req->namacust;
        if($req->livesearch == "yes"){
            $Customer=Customer::where('nama_customer', '=', $req->namacust)->get();
            $namacust = $Customer[0]->id_customer;
        }
        // dd($req->livesearch);

        Transaksi::create([
            'nomor_transaksi' => $req->kode,
            'nama_pengirim' =>$namacust,
            // 'nama_barang' =>$req->namabarang,
            // 'volume' =>$req->volume,
            // 'berat' =>$req->berat,
            // 'rute' =>$req->rute,
            // 'harga' =>$req->harga,
            // 'jenis_harga' => explode(",", $req->jenisharga)[0],
            // 'harga_tambahan'=>intval($req->hargatambahan),
            // 'persentase' =>$req->persentase,
            // 'total_harga' =>$req->total,
            // 'nama_kapal' =>$req->namakapal,
            // 'no_container' =>$req->nocontainer,
            // 'tanggal_berangkat' =>$req->tglberangkat,
        ]);
        return redirect("/masterTransaksi");
    }


}
