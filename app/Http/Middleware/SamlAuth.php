<?php 
namespace App\Http\Middleware;

use Closure;
use Saml2;

class SamlAuth
{

	public function handle($request, Closure $next)
	{

		if (!is_null(session("tipe"))) {
			return $next($request);
		} else {
			return Saml2::login();
		}
		
	}

}