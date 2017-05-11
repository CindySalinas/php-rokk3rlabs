<?php

namespace App\Http\Middleware;

use Closure;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Auth;

class Authenticate
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
        if (Auth::user()) {
            $request->user = Auth::user();
            return $next($request);
        }

        if (!$token = JWTAuth::getToken()) {
            throw new JWTException('Missing Token');
        }

        if (!$token = JWTAuth::decode($token)) {
            throw new JWTException('Invalid Token');
        }

        $user = JWTAuth::parseToken()->toUser();
        $request->user = $user;

        return $next($request);
    }
}
