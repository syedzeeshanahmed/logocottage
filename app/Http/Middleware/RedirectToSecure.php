<?php

namespace App\Http\Middleware;

use Closure;
use Request;

class RedirectToSecure
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
        if (!$request->secure() ) { // && env('APP_ENV') === 'prod'
                return redirect()->secure(Request::path());
            }

        return $next($request);
    }
}
