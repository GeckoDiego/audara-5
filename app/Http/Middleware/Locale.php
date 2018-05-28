<?php 

namespace App\Http\Middleware;

use Closure;
use Session;
use App;

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
        /*if (!empty(Session('lang'))) {
            App::setLocale(Session('lang'));
        }else{
            App::setLocale('en');
        }*/
        //@session_start ();
        //$data = $request->session();
        //dd( Session('lang') );
        return $next($request);
    }
}