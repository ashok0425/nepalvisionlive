<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Iscountry
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
        dd('ss');
        $s2=request()->segment(2);
        $s3=request()->segment(3);
        
    if ($s3) {
        return $next($request);
    }else{
     return redirect(url("package-detail/$s2"));
    }
       
    }
}
