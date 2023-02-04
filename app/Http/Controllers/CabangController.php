<?php

namespace App\Http\Controllers;

use App\Models\Cabang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CabangController extends Controller
{
    public function show()
    {
        $param['arrCabang']=Cabang::get();
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
                "nama" => 'required',
                "jum" => 'required',
                "alamat" => 'required',
                "provinsi" => 'required',
                "kota" => 'required',
                "kecamatan" => 'required',
                "kelurahan" => 'required',
                "kodepos" => 'required',
                "telpon" => 'required',
                "gmaps" => 'required',
                "email" => 'required',
                "status" => 'required',
            ],
            [
                "nama.required" => "nama harus di isi",
                "jum.required" => "jumlah harus di isi",
                "alamat.required" => "alamat harus di isi",
                "provinsi.required" => "provinsi harus di isi",
                "kota.required" => "kota harus di isi",
                "kecamatan.required" => "kecamatan harus di isi",
                "kelurahan.required" => "kelurahan harus di isi",
                "kodepos.required" => "kode pos harus di isi",
                "telpon.required" => "no telpon harus di isi",
                "gmaps.required" => "gmaps harus di isi",
                "email.required" => "email harus di isi",
                "status.required" => "status harus di isi",
            ]
        );
        Cabang::create([
            'id_cabang'=>$kode,
            'nama_cabang'=>$req->nama,
            'jum_cabang'=>$req->jum,
            'alamat_cabang'=>$req->alamat,
            'provinsi_cabang'=>$req->provinsi,
            'kota_cabang'=>$req->kota,
            'kecamatan_cabang'=>$req->kecamatan,
            'kelurahan_cabang'=>$req->kelurahan,
            'kodepos_cabang'=>$req->kodepos,
            'telpon_cabang'=>$req->telpon,
            'gmaps_cabang'=>$req->gmaps,
            'email_cabang'=>$req->email,
            'status_cabang'=>$status
        ]);
        return redirect("/masterCabang");
    }

    public function edit(Request $req)
    {
        // $id = $req->id;
        // $cabang = DB::table('master_tcabang')->where("id_cabang","=",$id)->first();
        //  return view('/editCabang',['id' => $id, 'cabang' => $cabang]);
    }
}
