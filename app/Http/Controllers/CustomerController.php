<?php

namespace App\Http\Controllers;

use App\Models\Cabang;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    Public function show()
    {
        $param['arrCustomer']=Customer::get();
        return view('admin.mCustomer',$param);
    }
    public function vfmcustomer()
    {
        $cabang = Cabang::all();
        return view('admin.mTcustomer',compact('cabang'));
    }


    public function doAdd(Request $req)
    {
        $temp = Customer::count();
        $cust = Customer::all();
        $ctr = 1;
        // for($i = 0; $i<$temp; $i++){
        //     $ctr++;
        // }
        foreach($cust as $c){
            $ctr = intval(substr($c->id_customer, 2)) + 1;
        }
        if($ctr<10){
            $kode = "CU00{$ctr}";
        }else if($ctr<100){
            $kode = "CU0{$ctr}";
        }else{
            $kode = "CU{$ctr}";
        }
        $status = 0;
        // echo($req->tab);
        // echo("CHECK");
        //  echo(Log::alert("HELLO"));
        if($req->tab =="On"){
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
                    "tab" => 'required',
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
                    "tab.required" => "status harus di isi",
                    "batasanHutang.required" => "batasan hutang harus di isi",
                    "batasPembayaran.required" => "batas pembayaran harus di isi",
                    "noRekening.required" => "no rekening harus di isi",
                    "metodePembayaran.required" => "metode pembayaran harus di isi"
                ]
            );
        }if($req->tab =="Off"){
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
                    "email" => 'required',
                    "tab" => 'required',
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
                    "telpon.required" => "no telpon harus di isi",
                    "email.required" => "email harus di isi",
                    "tab.required" => "status harus di isi",
                ]
            );
        }
        if($req->tab == ""){
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
                    "email" => 'required',
                    "tab" => 'required',
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
                    "telpon.required" => "no telpon harus di isi",
                    "email.required" => "email harus di isi",
                    "tab.required" => "status harus di isi",
                ]
            );
        }

        Customer::create([
            'id_customer' => $kode,
            'id_cabang'=> $req->cabang,
            'nama_customer'=>$req->nama,
            'npwp'=>$req->npwp,
            'jalan'=>$req->jalan,
            'provinsi'=>$req->provinsi,
            'kota'=>$req->kota,
            'kecamatan'=>$req->kecamatan,
            'kelurahan'=>$req->kelurahan,
            'kode_pos'=>$req->kodepos,
            'telpon'=>$req->telpon,
            'email'=>$req->email,
            'status_hutang'=>$req->status,
            'total_hutang'=>$req->batasanHutang,
            'batas_pembayaran'=>$req->batasPembayaran,
            'no_rekening'=>$req->noRekening,
            'metode_pembayaran'=>$req->metodePembayaran,
        ]);
        return redirect("/masterCustomer");
    }
}
