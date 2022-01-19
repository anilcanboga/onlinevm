<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminRoleCheckerMiddleware
{
    public function handle($request, Closure $next)
    {
        if(Auth::check()){
            if(Auth::user()->role_id == 2){
                return $next($request);
            }else{
                return abort('403');
            }
        }else{
            return redirect()-> route('auth.login') ;
        }
    }
}
