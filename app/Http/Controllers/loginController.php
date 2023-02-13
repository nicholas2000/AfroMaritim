<?php

namespace App\Http\Controllers;

use App\Models\modelpegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class loginController extends Controller
{
    public function login(Request $req){
        // $login = $req->user;
        // $password =$req->password;
        // $user = modelpegawai::withTrashed()->where('email_pegawai' , $login)->first();
        // if($user==null){
        //     return redirect("/")->with("error","Email anda salah! ");
        // }else{
        //     $role = $user->role_pegawai;
        //     $role = Str::lower(str_replace(' ', '', $role));

        //     if($role==$password){
        //         $req->session()->put('roleuser', $role);
        //         return View ("/sidebar/dashboard");
        //     }else{
        //         return redirect ("/")->with("error","Password anda salah! ");
        //     }
        // }
        $macAddr = exec('getmac');
        $clientIP = $request->ip();
        dd($clientIP);
    }

    public function logout(Request $request)
    {
        $request->session()->forget('roleuser');
        return redirect("/login");
    }
}
