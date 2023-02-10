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
        $arrPegawai = modelpegawai::all();
        $cabang = Cabang::all();
        return view('admin.mPegawai', compact('arrPegawai', 'cabang'));
    }

    public function vfmpegawai()
    {
        $cabang = Cabang::all();
        return view('admin.mTpegawai', compact('cabang'));
    }

    public function dovmtpegawai(Request $request)
    {
        $pegawai = modelpegawai::withTrashed()->get();
        $ctr = 1;
        foreach ($pegawai as $p) {
            $ctr = intval(substr($p->id_pegawai, 2)) + 1;
        }
        if ($ctr < 10) {
            $kode = "P00{$ctr}";
        } else if ($ctr < 100) {
            $kode = "P0{$ctr}";
        } else {
            $kode = "P{$ctr}";
        }

        $request->validate(
            [
                "cabang" => 'required',
                "nama" => 'required',
                "npwp" => 'required',
                "jalan" => 'required',
                "kodepos" => 'required',
                "provinsi" => 'required',
                "kota" => 'required',
                "kodepos" => 'required',
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
            'kodepos_pegawai' => $request->kodepos,
            'nohp_pegawai' => $request->hp,
            'telp_pegawai' => $request->telpon,
            'email_pegawai' => $request->email,
            'role_pegawai' => $request->role
        ]);
        return redirect("/masterPegawai");
    }

    public function deletepegawai($id)
    {
        $pegawai = modelpegawai::withTrashed()->find($id);
        if ($pegawai->trashed()) {
            $result = $pegawai->restore();
        } else {
            $result = $pegawai->delete();
        }

        if ($result) {
            return redirect('/masterPegawai');
        } else {
            return redirect('/masterPegawai');
        }
    }
    public function updatepegawai(Request $request)
    {
        $status = 0;
        if ($request->status == "Aktif") {
            $status = 1;
        } else {
            $status = 0;
        }
        $idpegawaiterpilih = modelpegawai::withTrashed()->find($request->kode);
        $result = $idpegawaiterpilih->update([
            'id_cabang' => $request->cabang,
            'nama_pegawai' => $request->nama,
            'npwp_pegawai' => $request->npwp,
            'alamat_pegawai' => $request->alamat,
            'provinsi_pegawai' => $request->provinsi,
            'kota_pegawai' => $request->kota,
            'kodepos_pegawai' => $request->kodepos,
            'nohp_pegawai' => $request->hp,
            'telp_pegawai' => $request->telpon,
            'email_pegawai' => $request->email,
            'role_pegawai' => $request->role
        ]);
        if ($result) {
            return redirect('/masterPegawai');
        } else {
            return redirect('/masterPegawai');
        }
    }
}
