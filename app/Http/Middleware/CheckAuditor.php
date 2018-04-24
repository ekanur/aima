<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class CheckAuditor
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
        if(Session::get('role') == 'auditor'){
            return $next($request);
        }else{
            abort(404);
        }
    }
}
