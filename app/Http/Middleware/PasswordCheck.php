<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Support\Facades\Request;

use Illuminate\Support\Facades\DB;

class PasswordCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next){
    
        $email = Request::get('email');
        $pwd = Request::get('password');
        
        if($email!=""&&$pwd!=""){

        $passwords = DB::table('accounts')->where('email',$email)->pluck('password');
        $a=0;
        foreach ($passwords as $password){
        if($pwd==$password){
            $a=1;
        }
        }
        if($a==1){
                return $next($request);
            }
            else{
                return redirect()->back()->withErrors(['Incorrect password or email address']);
            }
        }
        else
        {
            return redirect()->back()->withErrors(['please provide inputs']);
        }
    }   
}
