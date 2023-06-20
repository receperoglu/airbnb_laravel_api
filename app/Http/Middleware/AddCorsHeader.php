<?php

namespace App\Http\Middleware;

use Closure;

class AddCorsHeader
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);
        
        // Access-Control-Allow-Origin başlığını ayarla
        $response->headers->set('Access-Control-Allow-Origin', '*');

        return $response;
    }
}
