<?php

namespace App\Http\Middleware;

use Closure;

class IsUserLogged
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
        if( session('is_logged')==1 ){
           redirect('user.login')
        }
        return $next($request);
    }
}
