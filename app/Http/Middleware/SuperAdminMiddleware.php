<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

use Illuminate\Support\Str;

class SuperAdminMiddleware
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
        if($role=="superadmin"){
            return $next($request);
        }else{
            return redirect('/dashboard')->with('error','You do not have permission to do that!');
        }
    }
}
