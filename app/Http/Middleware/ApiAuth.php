<?php

namespace App\Http\Middleware;

use Closure;
use App\User;

class ApiAuth
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
        $token = $request->bearerToken();
        $user = User::where('api_token', $token)->first();
        if(!$user) {
            return response([
                'message' => 'Unauthenticated'
            ], 403);
        } else {
            return $next($request);
        }
    }
}
