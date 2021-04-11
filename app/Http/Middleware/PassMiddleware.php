<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class PassMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if($request-> input('Password') !== $request->input('Password2'))
        {
            return redirect('sign');
        }
        return $next($request);
    }
}
