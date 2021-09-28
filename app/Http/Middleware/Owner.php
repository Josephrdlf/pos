<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use Illuminate\Support\Facades\Session;

class Owner
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
        $email = Session::get("user-email");
        $user = User::with('roles')->where('email', $email)->first();
        if ($user){
            if ($user->roles->name == "Owner") {
                return $next($request);
            }
            return redirect('/login');
        }
        return redirect('/login');
    }
}
