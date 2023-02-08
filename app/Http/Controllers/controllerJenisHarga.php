<?php

namespace App\Http\Controllers;
use App\Models\modelJenisHarga;
use Illuminate\Http\Request;

class controllerJenisHarga extends Controller
{
    public function show(){
        return view("admin.mJenisharga");
    }
}
