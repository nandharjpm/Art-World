<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class ExtendAccessTokenExpiration
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $token = $request->user()?->token();
        if ($token && $token->expires_at->diffInMinutes(now() < 60)) {
            $token->update([
                'expires_at' => Carbon::now()->add(Passport::personalAccessTokensExpireIn()),
            ]);
        }

        return $next($request);
    }
}
