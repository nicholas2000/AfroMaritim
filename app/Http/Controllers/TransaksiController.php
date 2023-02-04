<?php

namespace App\Http\Controllers;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function showtransaksi(Request $req)
    {
        return view('admin/mTransaksi');
    }

    public function doAdd(Request $req)
    {
        

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
        $tothargapalsu=1000;
        $idadmpalsu="albert";
        
        Transaksi::create([
            'nomor_transaksi' => $kode,
            'id_customer' =>"CU001",
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
            'total_harga' =>$tothargapalsu,
            'nama_kapal' =>$req->namakapal,
            'nomor_container' =>$req->nocontainer,
            'tanggal_berangkat' =>$req->tglberangkat,
        ]);
        return redirect("/masterTransaksi");
    }
}
