<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Crypt;

use App;
use Auth;
Use Config;
Use Session;
use Redirect;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        $regmodule = DB::select("SELECT id, name  from module_category where status = 'ENABLED'");
        $user = Auth::user(); 
        $dmenu = array();
        $iz = 0;
        
        foreach ($regmodule as $data) {
            $dmenu[$iz]['id'] = $data->id;                
            $dmenu[$iz]['name'] = $data->name;   
            $dmenu[$iz]['data'] = array();
            $regmodulemenu = DB::select("SELECT m.id, m.name, m.alias, m.order as orderm, m.module_category_id, rm.permission FROM module m, role_module rm WHERE rm.role_id = ".$user->role_id." and rm.module_id = m.id and m.module_category_id = ".$data->id." order by orderm asc");                
            $izsub = 0;                
            foreach ($regmodulemenu as $datosub) {
                $dmenu[$iz]['data'][$izsub]['name'] = $datosub->name;
                $dmenu[$iz]['data'][$izsub]['alias'] = $datosub->alias;
                $dmenu[$iz]['data'][$izsub]['permission'] = $datosub->permission;
                $izsub = $izsub + 1;   
            }  
            $iz = $iz + 1;
        }   
        return view('home')->with( ['dmenu'=>$dmenu]);
    }

    public function setLocale($lang)
    {
        App::setLocale($lang);  
        $language = Session::get('locale', Config::get('app.locale'));
        Session::put('locale', $language);
        //return Redirect::back();
        return $next($request);
    }

    public function getLocale()
    {
        dd(  Config::get('app.locale') ); 
    }
}