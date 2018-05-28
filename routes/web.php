<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
@session_start ();
Route::group(['middleware' => 'auth'], function () {
    /* Language Switch Selector */     
    Route::get ( 'lang/{lang}', function (Request $request) {    
        session ([
             'lang' => $lang
        ]);
        $request->session()->put('lang', $lang);
        $input = $request->all();
        dd($input);
        $_SESSION['languaje'] = $lang;
            return \Redirect::back ();
    })->where ('lang', 'en|es');
});
Auth::routes();
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/getLocale', 'HomeController@getLocale')->name('getLocale');    

    /* Sidenav Left Menu */
    Route::prefix('aws')->group(function () {
        Route::get('/{redirect}', function(){
            $urlBefSla = str_replace('_', '/', Request::segment(2));
            $urlDecrypted = @openssl_decrypt($urlBefSla, 'aes128', 'gecko2018');
            return App::call('App\Http\Controllers\\'.$urlDecrypted.'Controller@index');
        });
    });