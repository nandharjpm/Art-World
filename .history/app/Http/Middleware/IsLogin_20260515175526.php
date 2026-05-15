<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class IsLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        session(['requested_url' => $request->fullUrl()]);
        if(!Auth::check()){
            Session::flash('error', 'Session has been Expired');
            return redirect()
        }
        return $next($request);
    }
}
