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
        // echo $path;
        // if($request->path()=='index'){
        //     // $next($request);
        //     return redirect('/');
        // }
        // if($request->path()==''){
        //     // $next($request);
        //     return redirect('/');
        // }
        echo $request->session()->has('user')?'true':'false';
        // if((($request->path()=="login") && (!$request->session()->has('user'))))
        // {
        //     return redirect('dashboard');
        // }
        if($request->session()->has('user'))
        {
            echo 'Inside test 1';
            return redirect('/dashboard');

        }
        // if(!$request->session()->has('user') && $request->path()=='login')
        // {
        //     return redirect('/login');
        //     echo 'Inside test 1';
        // }
        // else if($request->path()=="/"){
        //     return redirect('index');
        // }

        //     else if(($path!='index' && !Session::get('user'))){
        //         return redirect('/');
        //     }
        // echo $request;
        // if($request->path()=='/'){
        //             return redirect('/');
        //         }
        // else if(($path!='login' && !Session::get('user')) ){
        //     return redirect('/login');
        // }
        // else if(($path!='login' && !Session::get('user')) ){
        //     return redirect('/login');
        // }
        // else{
        //     return redirect('/about');
        // }
        return $next($request);
    }
}
