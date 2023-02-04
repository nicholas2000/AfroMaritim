<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    Public function show()
    {
        $param['arrCustomer']=Customer::get();
        return view('admin.mCustomer',$param);
    }

    public function doAdd(Request $req)
    {
        $temp = Customer::count();
        $ctr = 1;
        for($i = 0; $i<$temp; $i++){
            $ctr++;
        }
        if($ctr<10){
            $kode = "CU00{$ctr}";
        }else{
            $kode = "CU0{$ctr}";
        }
        $status = 0;
        if($req->status=="Aktif"){
            $status = 1;
            $req->validate(
                [
                    "nama" => 'required',
                    "npwp" => 'required',
                    "jalan" => 'required',
                    "provinsi" => 'required',
                    "kota" => 'required',
                    "kecamatan" => 'required',
                    "kelurahan" => 'required',
                    "kodepos" => 'required',
                    "telpon" => 'required',
                    'HP'=>'required',
                    "email" => 'required',
                    "status" => 'required',
                    "batasanHutang"=>'required',
                    "batasPembayaran" => 'required',
                    "noRekening" => 'required',
                    "metodePembayaran" => 'required',
                ],
                [
                    "nama.required" => "nama harus di isi",
                    "npwp.required" => "npwp harus di isi",
                    "jalan.required" => "jalan harus di isi",
                    "provinsi.required" => "provinsi harus di isi",
                    "kota.required" => "kota harus di isi",
                    "kecamatan.required" => "kecamatan harus di isi",
                    "kelurahan.required" => "kelurahan harus di isi",
                    "kodepos.required" => "kode pos harus di isi",
                    "HP.required" => "HP harus di isi",
                    "telpon.required" => "no telpon harus di isi",
                    "email.required" => "email harus di isi",
                    "status.required" => "status harus di isi",
                    "batasanHutang.required" => "batasan hutang harus di isi",
                    "batasPembayaran.required" => "batas pembayaran harus di isi",
                    "noRekening.required" => "no rekening harus di isi",
                    "metodePembayaran.required" => "metode pembayaran harus di isi"
                ]
            );
        }else{
            $status = 0;
            $req->validate(
                [
                    "nama" => 'required',
                    "npwp" => 'required',
                    "jalan" => 'required',
                    "provinsi" => 'required',
                    "kota" => 'required',
                    "kecamatan" => 'required',
                    "kelurahan" => 'required',
                    "kodepos" => 'required',
                    "telpon" => 'required',
                    'HP'=>'required',
                    "email" => 'required',
                    "status" => 'required',
                ],
                [
                    "nama.required" => "nama harus di isi",
                    "npwp.required" => "npwp harus di isi",
                    "jalan.required" => "jalan harus di isi",
                    "provinsi.required" => "provinsi harus di isi",
                    "kota.required" => "kota harus di isi",
                    "kecamatan.required" => "kecamatan harus di isi",
                    "kelurahan.required" => "kelurahan harus di isi",
                    "kodepos.required" => "kode pos harus di isi",
                    "HP.required" => "HP harus di isi",
                    "telpon.required" => "no telpon harus di isi",
                    "email.required" => "email harus di isi",
                    "status.required" => "status harus di isi",
                ]
            );
        }

        Customer::create([
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
        return redirect("/masterCustomer");
    }
}
