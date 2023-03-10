<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

use Illuminate\Support\Str;

class LoginMiddleware
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
        $role = "";
        if($request->session()->get('user_now') != ""){
            $role = $request->session()->get('user_now')->role_pegawai;
            $role = Str::lower(str_replace(' ', '', $role));
        }
        if($role==null || $role==""){
            return redirect('/');
        }else{
            return $next($request);
        }
    }
}
