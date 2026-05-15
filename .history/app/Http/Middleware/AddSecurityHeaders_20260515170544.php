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

        $response->header->set('Content-Security-Policy', "default-src 'self'; connect-src 'self' https://fonts.googleapis.com; script-src 'self' 'unsafe-inline' blob: https://www.google.com/recaptcha/ https://www.gstatic.com/recaptcha/; style-src 'self' 'unsafe-inline' https://fonts.googleapis.com https://fonts.bunny.net data:; img-src 'self' data: blob:; font-src 'self' https://fonts.googleapis.com https://fonts.gstatic.com https://fonts.bunny.net data:; object-src 'none'; frame-src https://www.google.com/; frame-ancestors 'none'; worker-src blob:; upgrade-insecure-requests;");

        
    }
}
