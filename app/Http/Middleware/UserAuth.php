<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Session;

class UserAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $path = $request->path();
        if($request->path()=="login" && $request->session()->has('user'))
        {
            return redirect('/dashboard');
        }
        else if(($path!='login' && !Session::get('user')) ){
            return redirect('login');
        }
        return $next($request);
    }
}
