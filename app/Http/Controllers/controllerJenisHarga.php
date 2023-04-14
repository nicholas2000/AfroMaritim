<?php

namespace App\Http\Controllers;

use App\Models\LogUserModel;
use App\Models\modelJenisHarga;
use Illuminate\Http\Request;

class controllerJenisHarga extends Controller
{
    public function show()
    {
        $param['arrJenisHarga']=modelJenisHarga::get();
        $arrNotif=LogUserModel::all();
        return view ("admin.mJenisHarga",compact("param", "arrNotif"));
    }
    public function doAdd(Request $request){
        $jenisharga = modelJenisHarga::all();
        modelJenisHarga::create([
        'tipe'=>$request->tipe,
        'jenis_harga'=>$request->jenisharga,
        'nominal'=>$request->nominal
    ]);
    $data_user_login=$request->session()->get("user_now");
        LogUserModel::create([
            "berita"=>$data_user_login["nama_pegawai"]." Berhasil menambahkan jenis harga ".$request->tipe,
            "status"=>"0",
        ]);
    return redirect("/masterJenisharga");
    }
}
