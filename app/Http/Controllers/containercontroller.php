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
        $id = $req->no_container;
        $arrTransaksi=Transaksi::all()->where('id_container' , $id);
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
        return redirect("/masterContainer");
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
