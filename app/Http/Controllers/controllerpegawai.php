<?php

namespace App\Http\Controllers;

use App\Models\Cabang;
use App\Models\modelpegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class controllerpegawai extends Controller
{
    public function vmpegawai()
    {
        $param['arrPegawai']=modelpegawai::get();
        return view('admin.mPegawai',$param);
    }

    public function vfmpegawai()
    {
        $cabang = Cabang::all();
        return view('admin.mTpegawai',compact('cabang'));
    }

    public function dovmtpegawai(Request $request)
    {
        $pegawai = modelpegawai::all();
        $ctr = 1;
        foreach($pegawai as $p){
            $ctr = intval(substr($p->id_pegawai, 2)) + 1;
        }
        if($ctr<10){
            $kode = "P00{$ctr}";
        }else if($ctr<100){
            $kode = "P0{$ctr}";
        }else{
            $kode = "P{$ctr}";
        }

        $request->validate(
            [
                "cabang" => 'required',
                "nama" => 'required',
                "npwp" => 'required',
                "jalan" => 'required',
                "kodepos" => 'required',
                "provinsi"=>'required',
                "kota"=>'required',
                "kecamatan"=>'required',
                "kelurahan"=>'required',
                "kodepos"=>'required',
                "hp" => 'required',
                "telpon" => 'required',
                "email" => 'required',
                "role" => 'required'
            ],
            [
                "cabang.required" => "cabang harus di isi",
                "nama.required" => "nama harus di isi",
                "npwp.required" => "npwp harus di isi",
                "jalan.required" => "jalan harus di isi",
                "provinsi.required" => "Provinsi harus di pilih",
                "kota.required" => "Kota harus di pilih",
                "kecamatan.required" => "Kecamatan harus di pilih",
                "kelurahan.required" => "Kelurahan harus di pilih",
                "kodepos.required" => "kode pos harus di isi",
                "hp.required" => "hp harus di isi",
                "telpon.required" => "telpon harus di isi",
                "email.required" => "email harus di isi",
                "role.required" => "Role harus di pilih",
            ]
        );
        modelpegawai::create([
            'id_pegawai' => $kode,
            'id_cabang' => $request->cabang,
            'nama_pegawai' => $request->nama,
            'npwp_pegawai' => $request->npwp,
            'alamat_pegawai' => $request->jalan,
            'provinsi_pegawai' => $request->provinsi,
            'kota_pegawai' => $request->kota,
            'kecamatan_pegawai' => $request->kecamatan,
            'kelurahan_pegawai' => $request->kelurahan,
            'kodepos_pegawai' => $request->kodepos,
            'nohp_pegawai' => $request->hp,
            'telp_pegawai' => $request->telpon,
            'email_pegawai' => $request->email,
            'role_pegawai' => $request->role
        ]);
        return redirect("/masterPegawai");
    }
}
