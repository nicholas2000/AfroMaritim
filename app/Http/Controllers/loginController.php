<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function login(Request $req){
        $login = $req->user;
        $password = $req->password;

        if($login == "admin"&&$password == "admin"){
            return View ("/dashboard");
        }

    }
}
