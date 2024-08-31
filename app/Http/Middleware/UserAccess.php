<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        // untuk cek role user, jika role tidak sama dengan 1 maka bukan admin atau dengan kata lain 'penulis'
        if (auth()->user()->role != $role) {
            abort(403);
        }
 
        return $next($request);
    }
}
