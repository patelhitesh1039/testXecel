<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->check()) {
            if (auth()->user()->hasRole('Admin')) {
                return $next($request);
            }

            if (auth()->user()->hasRole('Supervisor')) {
                if ($request->is('supervisor/*')) {
                    return $next($request);
                }

                abort(403, 'Unauthorized access.');
            }

            abort(403, 'User does not have the right roles.');
        }

        return redirect()->route('login');
    }
}