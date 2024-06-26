<?php

namespace App\Http\Middleware;

use App\Models\AccessLog;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LogAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $accessLog = new AccessLog();
        $accessLog->route = $request->path();
        $accessLog->ip_address = $request->ip();
        $accessLog->browser = $request->header('User-Agent');
        $accessLog->save();

        return $next($request);
    }
}
