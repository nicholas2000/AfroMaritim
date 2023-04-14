<?php

namespace App\Http\Controllers;

use App\Models\Cabang;
use App\Models\Kompetitor;
use App\Models\LogUserModel;
use Illuminate\Http\Request;

class KompetitorController extends Controller
{
    public function show()
    {
        $arrNotif=LogUserModel::all();
        $arrKompetitor=Kompetitor::all();
        return view('admin.mKompetitor',compact('arrKompetitor', 'arrNotif'));
    }


    public function doAdd(Request $req)
    {
        $kompetitor = Kompetitor::withTrashed()->get();
        $ctr = 1;
        foreach($kompetitor as $k){
            $ctr = intval(substr($k->id_kompetitor, 2)) + 1;
        }
        if($ctr<10){
            $kode = "K00{$ctr}";
        }else if($ctr<100){
            $kode = "K0{$ctr}";
        }else{
            $kode = "K{$ctr}";
        }

        $req->validate(
            [
                "nama" => 'required',
                "npwp" => 'required',
                "alamat" => 'required',
                "provinsi" => 'required',
                "kodepos" => 'required',
                "telpon" => 'required',
                "email" => 'required',
                "rute" => 'required',
                "namaBank" => 'required',
                "noRekening" => 'required',
            ],
            [
                "nama.required" => "nama harus di isi",
                "npwp.required" => "npwp harus di isi",
                "alamat.required" => "alamat harus di isi",
                "provinsi.required" => "provinsi harus di isi",
                "kodepos.required" => "kode pos harus di isi",
                "telpon.required" => "telpon harus di isi",
                "email.required" => "email harus di isi",
                "rute.required" => "rute harus di isi",
                "namaBank.required" => "nama bank harus di isi",
                "noRekening.required" => "no rekening harus di isi",
            ]
        );
        Kompetitor::create([
            'id_kompetitor'=>$kode,
            'nama_kompetitor'=>$req->nama,
            'npwp_kompetitor'=>$req->npwp,
            'alamat_kompetitor'=>$req->alamat,
            'provinsi_kompetitor'=>$req->provinsi,
            'kodepos_kompetitor'=>$req->kodepos,
            'telp_kompetitor'=>$req->telpon,
            'email_kompetitor'=>$req->email,
            'rute_kompetitor'=>$req->rute,
            'namabank_kompetitor'=>$req->namaBank,
            'norek_kompetitor'=>$req->noRekening
        ]);
        $data_user_login=$req->session()->get("user_now");
        LogUserModel::create([
            "berita"=>$data_user_login["nama_pegawai"]." Berhasil menambahkan kompetitor ".$req->nama,
            "status"=>"0",
        ]);
        return redirect('/masterKompetitor');
    }
    public function add(Request $request){
        $arrNotif=LogUserModel::all();
        return view('admin.mTkompetitor',compact("arrNotif"));

    }

    public function delete($id)
    {

        $kompetitor = Kompetitor::withTrashed()->find($id);
        if($kompetitor->trashed()){
            $result = $kompetitor->restore();
        }else{
            $result = $kompetitor->delete();
        }

        if ($result) {
            return redirect('/masterKompetitor');
        } else {
            return redirect('/masterKompetitor');
        }
    }
}
