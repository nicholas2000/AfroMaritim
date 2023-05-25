<?php

namespace App\Http\Controllers;

use App\Models\Container;
use App\Models\LogUserModel;
use Illuminate\Http\Request;
use App\Models\Transaksi;


class containercontroller extends Controller
{
    public function show(Request $req)
    {
        $id = $req->nomor_container;
        $arrTransaksi=Transaksi::all();
        $arrCon=Container::all();
        $arrNotif=LogUserModel::all();
        return view('admin.mContainer',compact("arrTransaksi","arrCon", "arrNotif"));
    }
    public function doAdd(Request $req)
    {

        Container::create([
            'nomor_container'=>$req->nomor_container,
            'nama_container'=>$req->namacon,
            'status'=>"1"
        ]);
        $data_user_login=$req->session()->get("user_now");
        LogUserModel::create([
            "berita"=>$data_user_login["nama_pegawai"]." Berhasil menambahkan container ".$req->namacon,
            "status"=>"0",
        ]);
        return redirect("/masterContainer");
    }
    public function add(Request $request){
        $arrNotif=LogUserModel::all();
        return view('admin.mTContainer',compact("arrNotif"));

    }

    public function lock($id)
    {
        $container = Container::withTrashed()->find($id);
        $result = $container->update([
            'status' => "0"
        ]);
        if($result){
            return redirect('/masterContainer');
        }else{
            return redirect('/masterContainer');
        }
    }
    public function unlock($id)
    {

        $container = Container::withTrashed()->find($id);
        $result = $container->update([
            'status' => "1"
        ]);
        if($result){
            return redirect('/masterContainer');
        }else{
            return redirect('/masterContainer');
        }
    }
}
