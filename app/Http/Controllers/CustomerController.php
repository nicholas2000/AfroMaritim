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
        $cust = Customer::withTrashed()->get();
        $ctr = 1;
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
        if($req->status =="On"){
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
        }if($req->status =="Off"){
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
                    "telpon.required" => "no telpon harus di isi",
                    "email.required" => "email harus di isi",
                    "status.required" => "status harus di isi",
                ]
            );
        }
        if($req->status == ""){
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
                    "telpon.required" => "no telpon harus di isi",
                    "email.required" => "email harus di isi",
                    "status.required" => "status harus di isi",
                ]
            );
        }
        $pajak = "";
        if($req->pajak=="Kena Pajak"){
            $pajak = "Kena Pajak";
        }else{
            $pajak = "Tidak Kena Pajak";
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
            'pajak'=>$pajak,
            'status_hutang'=>$req->status,
            'total_hutang'=>$req->batasanHutang,
            'batas_pembayaran'=>$req->batasPembayaran,
            'no_rekening'=>$req->noRekening,
            'metode_pembayaran'=>$req->metodePembayaran,
        ]);
        return redirect("/masterCustomer");
    }
    public function doEdit(Request $request)
    {
        $status = 0;
        if($request->status=="Aktif"){
            $status =1;
        }else{
            $status =0;
        }
        $cabangTerpilih = Customer::withTrashed()->find($request->kode);
        $result = $cabangTerpilih->update([
                'cabang' => $request->cabang,
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'provinsi' => $request->provinsi,
                'kota' => $request->kota,
                'kecamatan' => $request->kecamatan,
                'kodepos' => $request->kodepos,
                'telpon' => $request->telpon,
                'email' => $request->email,
            ]);
        if($result){
            return redirect('/masterCabang');
        }else{
            return redirect('/masterCabang');
        }
    }

}
