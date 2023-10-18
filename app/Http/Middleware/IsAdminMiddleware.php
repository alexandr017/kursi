<?php

namespace App\Http\Middleware;

use App\Models\Users\UserRole;
use Closure;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (is_null($request->user()) || $request->user()->role->role != UserRole::ROLE_ADMIN) {
            throw new AuthorizationException();
        }

        return $next($request);
    }
}
