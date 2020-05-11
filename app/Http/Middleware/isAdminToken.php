<?php

namespace App\Http\Middleware;

use App\User;
use Closure;

class isAdminToken
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
        $user = User::where('api_token', $request->header('_token'))->first();

        if ($user->role == 1) {
            return $next($request);
        }
    }
}
