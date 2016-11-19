<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    //return view('welcome');
    return 'welcome';
});
Route::get('/home', 'PostController@index');
Route::get('cds', 'CdController@index');

Route::get('/test', ['as'=>'testing',function(){
    return view('test2');
}]);
Route::get('redirect',function(){
    return redirect()->route('testing');
});

Route::resource('my','MyController');

Route::get('/foo/bar','UriController@index');
Route::get('/register',function(){
    return view('register');
});
Route::post('/user/register',
    array('uses'=>'UserRegistration@postRegister'));