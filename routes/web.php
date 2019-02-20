<?php

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

//App::setLocale('es'); Lo podriamos en español

Route::get('/', function () {
    $nombre="Miguel";
    return view('home')->with('nombre',$nombre);
})->name('home');

Route::view('/about','about')->name('about');

Route::get('/portfolio','PortfolioController@index')->name('portfolio');

Route::view('/contact','contact')->name('contact');

Route::post('contact','MessageController@store');

//Route::resource('projects','PortfolioController');

Route::group(['middleware' => 'web'], function () {
    Route::get('idioma/{idioma}', function ($idioma) {  
        //Cuidado aquí hay docuemntación que pone Session:set  y no funciona.  
        Session::put('lang', $idioma);
        return Redirect::back();
    });
});
