<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class HttpsMiddleware
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
        // check if environment is production
        if(env('APP_ENV') === "production") {
            if (!$request->secure()) {
                return redirect()->secure($request->path());
            }
        }
        
        return $next($request);
    }
}
