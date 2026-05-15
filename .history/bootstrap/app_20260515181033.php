<?php

use App\Http\Middleware\AddSecurityHeaders;
use App\Http\Middleware\IsLogin;
use App\Http\Middleware\LogRequestInfo;
use App\Http\Middleware\RollMiddleware;
use App\Http\Middleware\XSS;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->alias([
            'securityheaders' => AddSecurityHeaders::class,
            'userlog' => LogRequestInfo::class,
            'isLogin' => IsLogin::class,
            'role' => RollMiddleware::class,
            'xss' => XSS::class,
            'extendAccessTokenExpiration' => ExtendAccessTokenExpiration::class
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
