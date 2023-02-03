<?php

namespace App\Http\Controllers;

use App\Models\modelpegawai;
use Illuminate\Http\Request;


class controllerpegawai extends Controller
{
    public function vmpegawai()
    {
        $param['arrPegawai']=modelpegawai::get();
        return view('admin.mPegawai',$param);
    }

    public function dovmtpegawai(Request $request)
    {
        $temp = modelpegawai::count();
        $ctr = 1;
        for ($i = 0; $i < $temp; $i++) {
            $ctr++;
        }
        if ($ctr < 10) {
            $kode = "P00{$ctr}";
        } else {
            $kode = "P0{$ctr}";
        }

        $request->validate(
            [
                "nama" => 'required',
                "npwp" => 'required',
                "jalan" => 'required',
                "kodepos" => 'required',
                "hp" => 'required',
                "telpon" => 'required',
                "email" => 'required',
            ],
            [
                "nama.required" => "nama harus di isi",
                "npwp.required" => "npwp harus di isi",
                "jalan.required" => "jalan harus di isi",
                "kodepos.required" => "kode pos harus di isi",
                "hp.required" => "hp harus di isi",
                "telpon.required" => "telpon harus di isi",
                "email.required" => "email harus di isi"
            ]
        );
        modelpegawai::create([
            'id_pegawai' => $kode,
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
