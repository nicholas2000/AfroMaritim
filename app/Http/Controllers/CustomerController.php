<?php

namespace App\Http\Controllers;

use App\Models\Cabang;
use App\Models\Customer;
use App\Models\LogUserModel;
use App\Models\Provinsi;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    Public function show()
    {
        $arrCustomer=Customer::all();
        $arrCabang = Cabang::all();
        $arrNotif= LogUserModel::all();
        return view('admin.mCustomer',compact('arrCustomer','arrCabang','arrNotif'));
    }
    public function vfmcustomer()
    {
        $arrProvinsi = Provinsi::all();
        $arrCabang = Cabang::all();
        $arrNotif=LogUserModel::all();
        return view('admin.mTcustomer',compact('arrCabang','arrProvinsi','arrNotif'));
    }

    public function sd(Request $req){
        echo "alert($req->status)";
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
        $totalhutang = "";
        $batasbayar = "";
        $norek = "";
        $metode = "";
        if($req->status=="On"){
            $req->validate(
                [
                    "nama" => 'required',
                    "npwp" => 'required',
                    "jalan" => 'required',
                    "provinsi" => 'required',
                    "kodepos" => 'required',
                    "telpon" => 'required',
                    "email" => 'required',
                    "pajak" => 'required',
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
                    "kodepos.required" => "kode pos harus di isi",
                    "telpon.required" => "no telpon harus di isi",
                    "email.required" => "email harus di isi",
                    "pajak.required" => "pajak harus dipilih",
                    "status.required" => "status harus dipilih",
                    "batasanHutang.required" => "batasan hutang harus di isi",
                    "batasPembayaran.required" => "batas pembayaran harus di isi",
                    "noRekening.required" => "no rekening harus di isi",
                    "metodePembayaran.required" => "metode pembayaran harus di isi",
                ]
            );

            $totalhutang = $req->batasanHutang;
            $batasbayar = $req->batasPembayaran;
            $norek = $req->noRekening;
            $metode = $req->metodePembayaran;
        }else{
            $req->validate(
                [
                    "nama" => 'required',
                    "npwp" => 'required',
                    "jalan" => 'required',
                    "provinsi" => 'required',
                    "kodepos" => 'required',
                    "telpon" => 'required',
                    "email" => 'required',
                    "pajak" => 'required',
                    "status" => 'required',
                ],
                [
                    "nama.required" => "nama harus di isi",
                    "npwp.required" => "npwp harus di isi",
                    "jalan.required" => "jalan harus di isi",
                    "provinsi.required" => "provinsi harus di isi",
                    "kodepos.required" => "kode pos harus di isi",
                    "telpon.required" => "no telpon harus di isi",
                    "email.required" => "email harus di isi",
                    "pajak.required" => "pajak harus dipilih",
                    "status.required" => "status harus dipilih",
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
            'kode_pos'=>$req->kodepos,
            'telpon'=>$req->telpon,
            'email'=>$req->email,
            'pajak'=>$pajak,
            'status_hutang'=>$req->status,
            'total_hutang'=>$totalhutang,
            'batas_pembayaran'=>$batasbayar,
            'no_rekening'=>$norek,
            'metode_pembayaran'=>$metode,
        ]);
        $data_user_login=$req->session()->get("user_now");
        LogUserModel::create([
            "berita"=>$data_user_login["nama_pegawai"]." Berhasil menambahkan customer ".$req->nama,
            "status"=>"0",
        ]);
        return redirect("/masterCustomer");
    }
    public function doEdit(Request $request)
    {
        $cabangCustomer = Customer::withTrashed()->find($request->kode);
        $result = $cabangCustomer->update([
                'id_cabang' => $request->cabang,
                'nama_customer' => $request->nama,
                'npwp'=>$request->npwp,
                'alamat' => $request->alamat,
                'provinsi' => $request->provinsi,
                'kodepos' => $request->kodepos,
                'telpon' => $request->telpon,
                'email' => $request->email,
                'pajak' => $request->status,
                'status_hutang'=>$request->status_hutang,
                'total_hutang'=>$request->batasanHutang,
                'no_rekening'=>$request->noRekening,
                'metode_pembayaran'=>$request->metodePembayaran

            ]);
            $data_user_login=$req->session()->get("user_now");
            LogUserModel::create([
                "berita"=>$data_user_login["nama_pegawai"]." Berhasil Mengedit customer ".$request->nama,
                "status"=>"0",
            ]);

        if($result){
            return redirect('/masterCustomer');
        }else{
            return redirect('/masterCustomer');
        }
    }
    public function delete($id)
    {

        $customer = Customer::withTrashed()->find($id);
        if($customer->trashed()){
            $result = $customer->restore();
        }else{
            $result = $customer->delete();
        }

        if ($result) {
            return redirect('/masterCustomer');
        } else {
            return redirect('/masterCustomer');
        }
    }

}
