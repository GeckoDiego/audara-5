<?php

namespace App\Http\Middleware;

use App;
use Session;
use Closure;

class Language
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
        if (!empty(session('lang'))) {
            App::setLocale(session('lang'));
        }
        return $next($request);
    }
}