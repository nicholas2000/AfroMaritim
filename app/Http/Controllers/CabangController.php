<?php

namespace App\Http\Controllers;

use App\Models\Cabang;
use Illuminate\Http\Request;

class CabangController extends Controller
{
    public function show()
    {
        // $param = Cabang::select('*')->get();
        $param['arrCabang']=Cabang::all();
        return view('admin.mCabang',$param);
    }

    public function doAdd(Request $req)
    {
        $temp = Cabang::count();
        $ctr = 1;
        for($i = 0; $i<$temp; $i++){
            $ctr++;
        }
        if($ctr<10){
            $kode = "C00{$ctr}";
        }else{
            $kode = "C0{$ctr}";
        }
        $status = 0;
        if($req->status=="Aktif"){
            $status = 1;
        }else{
            $status = 0;
        }
        $req->validate(
            [
                'nama'=>'required',
            ]
        );
        Cabang::create([
            'id'=>$kode,
            'nama_cabang'=>$req->nama,
            'jum_cabang'=>$req->jum,
            'alamat_cabang'=>$req->alamat,
            'provinsi_cabang'=>$req->provinsi,
            'kota_cabang'=>$req->kota,
            'kecamatan_cabang'=>$req->kecamatan,
            'kelurahan_cabang'=>$req->kelurahan,
            'kodepos_cabang'=>$req->kodepos,
            'gmaps_cabang'=>$req->gmaps,
            'email_cabang'=>$req->email,
            'status_cabang'=>$status
        ]);
        return view("admin.mCabang");
    }
}
