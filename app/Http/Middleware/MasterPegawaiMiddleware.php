<?php

namespace App\Http\Middleware;

use App\Models\Permission;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MasterPegawaiMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $role = $request->session()->get('user_now')->role_pegawai;
        $role = Str::lower(str_replace(' ', '', $role));
        $cek = Permission::where('daftar_berita',"Master Pegawai")->first();
        if($role=="superadmin"){
            return $next($request);
        }else if($cek->adminmakassar==true){
            return $next($request);
        }else if($cek->adminsurabaya==true){
            return $next($request);
        }else if($cek->accounting==true){
            return $next($request);
        }else if($cek->kurir==true){
            return $next($request);
        }
        else{
            return redirect('/dashboard')->with('error','You do not have permission to do that!');
        }
    }
}
