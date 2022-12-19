<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Http\Requests\ValidationRequest;
use App\Models\Admin;
use App\Models\Suporte;

class AuthenticateUser
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
        if($request->email && $request->password){

            $admin = Admin::where('email', $request->email)
                        ->where('password', $request->password)
                        ->first();

            $suporte = Suporte::where('email', $request->email)
                        ->where('password', $request->password)
                        ->first();

            if($admin OR $suporte){
                return $next($request);
            }
            return redirect('/');
        }
        return redirect('/');
    }
}
