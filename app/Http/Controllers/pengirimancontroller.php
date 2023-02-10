<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pengirimancontroller extends Controller
{
    public function vmpengirimansatu()
    {
        return view("form.formpengirimansatu");
    }
    public function vmpengirimandua()
    {
        return view("form.formpengirimandua");
    }
}
