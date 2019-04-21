<?php

namespace App\Http\Middleware;

use Closure;

class AdminAuthCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->user() && $request->user()->hasRole('admin'))
        {
            return $next($request);
        }
        return redirect('login');
    }
}
