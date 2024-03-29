<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\LogUserModel;
use App\Models\modelpegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Symfony\Component\Console\Input\Input;

class loginController extends Controller
{
    public function toLoginPage(){
        session()->put('user_now', '');
        return view('login');
    }

    public function login(Request $req)
    {
        $login = $req->user;
        $password =$req->password;
        $user = modelpegawai::withTrashed()->where('email_pegawai' , $login)->first();
        if($user==null){
            return redirect("/")->with("error","Email anda salah! ");
        }else{
            $passwordUser = $user->password_pegawai;
            // $role = Str::lower(str_replace(' ', '', $role));

            if(Hash::check($password, $passwordUser)){
                $req->session()->put('user_now', $user);
                    $data = json_decode($req->device);
                    $this->cekActivityLogin( $req->ip(),$data,$user->nama_pegawai);
                    $arrNotif= LogUserModel::all();
                return View ("/sidebar/dashboard",compact('arrNotif'));
            }else{
                return redirect ("/")->with("error","Password anda salah! ");
            }
        }
    }

    function cekActivityLogin($ip,$data,$nama)
    {
        $clientIP = $ip;

        $bname = $data[0];
        $platform = $data[1];
        $nama_pegawai = $nama;
        Activity::create([
            'user'=> $nama_pegawai,
            'activity'=>"Login Berhasil",
            'ip_address'=>$clientIP,
            'browser'=>$bname,
            'os'=> $platform,
        ]);

    }
    function cekActivityLogout($ip,$data,$nama)
    {
        $clientIP = $ip;
        $bname = $data[0];
        $platform = $data[1];
        $nama_pegawai = $nama;
        Activity::create([
            'user'=> $nama_pegawai,
            'activity'=>"Logout Berhasil",
            'ip_address'=>$clientIP,
            'browser'=>$bname,
            'os'=> $platform,
        ]);

    }

    public function logout(Request $request)
    {
        $user = session()->get('user_now');

        $data = json_decode($request->device);

        $this->cekActivityLogout( $request->ip(),$data,$user->nama_pegawai);

        session()->forget('user_now');
        return redirect("/");
    }
}
