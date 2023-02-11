<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pengirimancontroller extends Controller
{
    public function vmpengirimansatu()
    {
        return view("admin.mOpsi1");
    }
    public function vmpengirimandua()
    {
        return view("admin.mOpsi2");
    }
}
