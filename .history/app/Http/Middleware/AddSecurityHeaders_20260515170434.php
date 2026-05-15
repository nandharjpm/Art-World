<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AddSecurityHeaders
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ((!$request->isSecure() && $request->header('X-Forwarded-Proto') !== 'https') && app()->environment('production')) {
            return redirect()->secure($request->getRequestUri());
        }


        $response = $next($request);
        $allowedOrigin = env('CORS_ALLOWED_ORIGIN', '*');

        
    }
}
