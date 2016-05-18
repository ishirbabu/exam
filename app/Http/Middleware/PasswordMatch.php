<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Request;

use Closure;

class PasswordMatch
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $password = Request::get('password');
        $re_password = Request::get('re_password');
            if($password==$re_password){
                return $next($request);
            }
            else{
                return redirect()->back()->withErrors(['Password does not match, please fill up the form correctly']);
            }   
    }
}
