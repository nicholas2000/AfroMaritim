<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Transaksi;
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
        return view('admin/mTransaksi');
    }

    public function doAdd(Request $req)
    {
        $req->validate(
            [
                "namacust" => 'required',
                "namabarang" => 'required',
                "ukuran" => 'required',
                "volume"=>'required',
                "berat"=>'required',
                "rute"=>'required',
                "tonase"=>'required',
                "harga"=>'required',
                "jenisharga" => 'required',
                "hargatambahan" => 'required',
                "persentase" => 'required',
                "namakapal" => 'required',
                "nocontainer" => 'required',
                "tglberangkat" => 'required',
            ],
            [
                "namacust.required" => 'Nama Customer Harus di isi',
                "namabarang.required" => 'Nama Barang Harus di isi',
                "ukuran.required" => 'Ukuran Harus di isi',
                "volume.required"=>'Volume Harus di isi',
                "berat.required"=>'Rute Harus di isi',
                "rute.required"=>'Rute Harus di isi',
                "tonase.required"=>'Tonase Harus di isi',
                "harga.required"=>'Harga Harus di isi',
                "jenisharga.required" => 'Jenis Harga Harus dipilih',
                "hargatambahan.required" => 'Harga Tambahan Harus di isi',
                "persentase.required" => 'Persentase Harus di isi',
                "namakapal.required" => 'Nama Kapal Harus di isi',
                "nocontainer.required" => 'Nomor Container Harus di isi',
                "tglberangkat.required" => 'Tanggal Berangkat Harus Terisi',
            ]
        );

        $temp = Transaksi::count();
        $ctr = 1;
        for ($i = 0; $i < $temp; $i++) {
            $ctr++;
        }
        if ($ctr < 10) {
            $kode = "TC00{$ctr}";
        } else {
            $kode = "TC0{$ctr}";
        }
        $idadmpalsu="admin";

        $Customer=Customer::where('nama_customer', 'like', '%' . $req->namacust . '%')->get();


        Transaksi::create([
            'nomor_transaksi' => $kode,
            'id_customer' =>$Customer[0]->id_customer,
            "id_admin"=> $idadmpalsu,
            'nama_barang' =>$req->namabarang,
            'ukuran' =>$req->ukuran,
            'volume' =>$req->volume,
            'berat' =>$req->berat,
            'rute' =>$req->rute,
            'harga' =>$req->harga,
            'jenis_harga' => $req->jenisharga,
            'tonase'=>$req->tonase,
            'harga_tambahan'=>$req->hargatambahan,
            'persentase' =>$req->persentase,
            // 'total_harga' =>$req->totalharga,
            'total_harga' =>$req ->total,
            'nama_kapal' =>$req->namakapal,
            'nomor_container' =>$req->nocontainer,
            'tanggal_berangkat' =>$req->tglberangkat,
        ]);
        return redirect("/masterTransaksi");
    }
}
