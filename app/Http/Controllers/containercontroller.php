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
        Container::create([
            'no_container'=>$req->nocon,
            'nama_container'=>$req->namacon
        ]);
        return redirect("/dotcontainer");
    }
}
