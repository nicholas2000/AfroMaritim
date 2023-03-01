<?php

namespace App\Http\Controllers;

use App\Models\Container;
use Illuminate\Http\Request;

class containercontroller extends Controller
{
    public function show(Request $req)
    {
        $param['arrCon']=Container::get();
        return view('admin.mContainer',$param);
    }
    public function doAdd(Request $req)
    {
        $ctr =1;
        $container = Container::withTrashed()->get();
        foreach($container as $c){
            $ctr = intval($c->id) + 1;
        }
        Container::create([
            'id' => $ctr,
            'no_container'=>$req->nocon,
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
