<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class controllerpegawai extends Controller
{
    public function vmpegawai()
    {
        return view('admin.mPegawai');
    }

    public function dotmpegawai(Request $request)
    {

        return view("admin.mTpegawai");
    }
    public function vmtpegawai()
    {
        return view("admin.mTpegawai");
    }
    public function dovmtpegawai(Request $request)
    {
        $request->validate(
        [
            "nama"=>'required',
            "npwp"=>'required',
            "jalan"=>'required',
            "kodepos"=>'required',
            "hp"=>'required',
            "telpon"=>'required',
            "email"=>'required|email',
        ],
        [
            "nama.required"=>"nama harus di isi",
            "npwp.required"=>"npwp harus di isi",
            "jalan.required"=>"jalan harus di isi",
            "kodepos.required"=>"kodepos harus di isi",
            "hp.required"=>"hp harus di isi",
            "telpon.required"=>"telpon harus di isi",
            "email.required"=>"email harus di isi"
        ]
        );
        return view("admin.mTpegawai");
    }
}
