<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Container\Attributes\Auth as AttributesAuth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AdminOnly
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Excluded routes
        $excluded = ['login', 'up'];
        foreach ($excluded as $route) {
            if ($request->is($route) || $request->is("$route/*")) {
                return $next($request);
            }
        }

        if (!Auth::check()) {
            return redirect()->route('login');
        }

        if (Auth::user()->email !== 'norvincrujido90@gmail.com') {
            abort(403, 'Unauthorized');
        }

        return $next($request);
    }



}
