<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class VerifyRootPrivilege
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = Auth::user();

        if(!$user) {
            abort(403, 'Unauthorized');
        }

        if($user->role != 6) {
            abort(403, 'Permission denied. To access this page you need at least root privilege.');
        }
        return $next($request);
    }
}
