<?php

namespace App\Http\Controllers;

use App\Models\Kompetitor;
use Illuminate\Http\Request;

class KompetitorController extends Controller
{
    public function show()
    {
        $param['arrKompetitor']=Kompetitor::get();
        return view('admin.mKompetitor',$param);
    }

    public function doAdd(Request $req)
    {
        $temp = Kompetitor::count();
        $ctr = 1;
        for($i = 0; $i<$temp; $i++){
            $ctr++;
        }
        if($ctr<10){
            $kode = "K00{$ctr}";
        }else{
            $kode = "K0{$ctr}";
        }

        $req->validate(
            [
                'nama'=>'required',
            ]
        );
        Kompetitor::create([
            'id_kompetitor'=>$kode,
            'nama_kompetitor'=>$req->nama,
            'npwp_kompetitor'=>$req->npwp,
            'alamat_kompetitor'=>$req->alamat,
            'provinsi_kompetitor'=>$req->provinsi,
            'kota_kompetitor'=>$req->kota,
            'kecamatan_kompetitor'=>$req->kecamatan,
            'kelurahan_kompetitor'=>$req->kelurahan,
            'kodepos_kompetitor'=>$req->kodepos,
            'nohp_kompetitor'=>$req->hp,
            'telp_kompetitor'=>$req->telpon,
            'email_kompetitor'=>$req->email,
            'rute_kompetitor'=>$req->rute,
            'namabank_kompetitor'=>$req->namaBank,
            'norek_kompetitor'=>$req->noRekening
        ]);

        return redirect('/masterKompetitor');
    }
}
