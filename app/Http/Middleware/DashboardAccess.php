<?php

namespace App\Http\Middleware;

use Closure;

class DashboardAccess
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
        $nxt = $next($request);
         if(session('is_logged')==1 && session('is_logged')!=null){
                // return redirect( route( 'user.profile' ) );
          } else{
                return redirect( route('login') );
          } 
        return $nxt;
    }
}
