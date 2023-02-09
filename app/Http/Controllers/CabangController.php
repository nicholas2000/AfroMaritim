<?php

namespace App\Http\Controllers;

use App\Models\Cabang;
use App\Models\Customer;
use App\Models\Transaksi;
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

        $cabang = Cabang::withTrashed()->get();
        $ctr = 1;
        foreach($cabang as $c){
            $ctr = intval(substr($c->id_cabang, 2)) + 1;
        }
        if($ctr<10){
            $kode = "C00{$ctr}";
        }else if($ctr<100){
            $kode = "C0{$ctr}";
        }else{
            $kode = "C{$ctr}";
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
            'kodepos_cabang'=>$req->kodepos,
            'telpon_cabang'=>$req->telpon,
            'gmaps_cabang'=>$req->gmaps,
            'email_cabang'=>$req->email,
            'status_cabang'=>$status
        ]);
        return redirect("/masterCabang");
    }


    public function doEdit(Request $request)
    {
        $status = 0;
        if($request->status=="Aktif"){
            $status =1;
        }else{
            $status =0;
        }
        $cabangTerpilih = Cabang::withTrashed()->find($request->kode);
        $result = $cabangTerpilih->update([
                'nama_cabang' => $request->nama,
                'jum_cabang' => $request->jum,
                'alamat_cabang' => $request->alamat,
                'provinsi_cabang' => $request->provinsi,
                'kota_cabang' => $request->kota,
                'kodepos_cabang' => $request->kodepos,
                'telpon_cabang' => $request->telpon,
                'gmaps_cabang' => $request->gmaps,
                'email_cabang' => $request->email,
                'status_cabang' => $status
            ]);
        if($result){
            return redirect('/masterCabang');
        }else{
            return redirect('/masterCabang');
        }
    }

    public function delete($id)
    {

        $cabang = Cabang::withTrashed()->find($id);
        if($cabang->trashed()){
            $result = $cabang->restore();
        }else{
            $result = $cabang->delete();
        }

        if ($result) {
            return redirect('/masterCabang');
        } else {
            return redirect('/masterCabang');
        }
    }

}
