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
        $kompetitor = Kompetitor::all();
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
                "kota" => 'required',
                "kecamatan" => 'required',
                "kelurahan" => 'required',
                "kodepos" => 'required',
                "hp" => 'required',
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
                "kota.required" => "kota harus di isi",
                "kecamatan.required" => "kecamatan harus di isi",
                "kelurahan.required" => "kelurahan harus di isi",
                "kodepos.required" => "kode pos harus di isi",
                "hp.required" => "hp harus di isi",
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
