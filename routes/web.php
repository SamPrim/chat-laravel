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

/*Route::get('/', function () {
    return view('welcome');
});
Route::get('redirect', function () {
    return redirect('vue/1');
});
Route::get('vue/{n}', function($n){
    return view('vue')->withNum($n);
})->where('n','[1-8]');
Route::get('facture/{n}', function($n){
    return view('facture')->withNumero($n);
})->where('n','[1-8]');
Route::get('{n}', function($n) { return 'Je suis la page '.$n.' !'; })->where('n', '[1-5]');*/

Route::get('/', 'WelcomeController@index');
Route::get('/', ['uses' => 'WelcomeController@index', 'as' => 'home']);
Route::get('/facture/{n}', 'WelcomeController@facture')->where('n','[1-9]{0,3}');
Route::get('/article/{n}', 'WelcomeController@article')->where('n','[1-9]{0,3}');

// Formulaire
Route::get('users', 'UsersController@getInfos');
Route::post('users', 'UsersController@postInfos');

//contct Formulaire
Route::get('contact', 'ContactController@getForm');
Route::post('contact', 'ContactController@postForm');

//Image Request
Route::get('photo','PhotoController@getPhoto');
Route::post('photo','PhotoController@postPhoto');


