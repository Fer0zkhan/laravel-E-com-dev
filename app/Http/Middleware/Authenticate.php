<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        // if(Auth::user()->hasRole('user')) {
        //     return route('user_login');
        // }
        // dd($request->path());
        // if($request->path() == 'admin/logout' || $request->path() == 'admin/register' || $request->path() == 'admin/dashboard'){
        //     return route('admin_login');
        // }
        // if($request->path() == '/checkout'){
        //     return route('user_login');
        // }
        if (! $request->expectsJson()) {
            if((Auth::guest() && $request->path() == 'checkout') || (Auth::guest() && $request->path() == 'profile') || (Auth::guest() && $request->path() == 'logout')){
                return route('user_login');
            }
            // if(!Auth::guest()){
            //     dd("kardo");
            // }
            return route('user_login');
        }
    }
}
