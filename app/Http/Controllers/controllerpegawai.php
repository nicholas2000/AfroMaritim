<?php

namespace App\Http\Controllers;

use App\Models\Cabang;
use App\Models\modelpegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\Console\Input\Input;

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
        $arrCabang = Cabang::all();
        return view('admin.mTpegawai', compact('arrCabang'));
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
                'con_password' => 'same:password'
            ],
            [
                "con_password.same" => "Konfirmasi password harus sama dengan password",
            ]
        );
        $password = Hash::make($request->password);

        modelpegawai::create([
            'id_pegawai' => $kode,
            'id_cabang' => $request->cabang,
            'nama_pegawai' => $request->nama,
            'npwp_pegawai' => $request->npwp,
            'alamat_pegawai' => $request->jalan,
            'provinsi_pegawai' => $request->provinsi,
            'kota_pegawai' => $request->kota,
            'kodepos_pegawai' => $request->kodepos,
            'telp_pegawai' => $request->telpon,
            'email_pegawai' => $request->email,
            'password_pegawai' => $password,
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
