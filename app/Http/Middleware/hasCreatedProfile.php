<?php

namespace App\Http\Middleware;

use Closure;

class hasCreatedProfile
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
        if (isset($request->user()->profile)) {
            return $next($request);
        } else {
            return redirect(route('home'))->with('dangerMessage', 'Por favor cree su perfíl antes de continuar');
        }
    }
}
