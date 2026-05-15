<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class LogRequestInfo
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $userId = Auth::check() ? Auth::user()->id : 0;
        $sessionId = Auth::getSession();
        $requestUrl = $request->fullUrl();
        $dateTime = Carbon::now();
        $clientIp = $request->ip();
        $userAgetnt = $request->header('User-Agent');

        $data = [
            'user_login_id' => $userId,
            'session_id' => $sessionId,
            'user_identifier' => $requestUrl,
            'request_uri' => $dateTime,
            'client_ip' => $clientIp,
            'client_user_agent' => $userAgetnt,
        ]
        return $next($request);
    }
}
