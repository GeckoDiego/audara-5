<?php 

namespace App\Http\Middleware;

use Closure;
use Session;
use App;
use Config;

class Locale {

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        /*if (!empty(session('lang'))) {
            App::setLocale(session('lang'));
        }*/
        //dd( session('lang') );
        return $next($request);
    }

}