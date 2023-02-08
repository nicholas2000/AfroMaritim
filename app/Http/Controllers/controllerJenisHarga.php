<?php

namespace App\Http\Controllers;
use App\Models\modelJenisHarga;
use Illuminate\Http\Request;

class controllerJenisHarga extends Controller
{
    public function show()
    {
        return view ("admin.mJenisHarga");
    }
    public function doAdd(Request $request){

        $jenisharga = modelJenisHarga::all();
        modelJenisHarga::create([
        'type'=>$request->tipe,
        'jenis_harga'=>$request->jenisharga,
        'nominal'=>$request->nominal

    ]);
    return redirect("/masterJenisharga");
    }
}
