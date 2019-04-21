<?php

namespace App\Http\Middleware;

use Closure;

class NguoiThuyetTrinhAuthCheck
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
        if ($request->user() && $request->user()->hasRole('nguoi_thuyet_trinh'))
        {
            return $next($request);
        }
        return redirect('login');
    }
}
