<?php

namespace App\Http\Middleware;

use Closure;
use Session;
class CheckKoordinator
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
        if(Session::get('role') == 'koordinator'){
            return $next($request);
        }else{
            return redirect("/auditor");
        }
    }
}
