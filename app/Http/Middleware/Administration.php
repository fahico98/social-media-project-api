<?php

namespace App\Http\Middleware;

use Illuminate\Http\Response;
use Closure;

class Administration
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Illuminate\Http\Response
     */
    public function handle($request, Closure $next)
    {
        return (auth()->user()->is_admin) ? $next($request) : response("only allowed for administration", 401);
    }
}
