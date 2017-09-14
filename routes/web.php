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

Route::get('/', function () {
    return view('welcome');
});

// user rotas
Route::get('/user/perfil', 'UserController@index'); // ok
Route::get('/user/create', 'UserController@create');// ok
Route::post('/user/store', 'UserController@store'); // ok
Route::get('/user/show/{id}', 'UserController@show')->where('id', '[0-9]+'); // ok
Route::get('/user/edit/{id}', 'UserController@edit')->where('id', '[0-9]+'); // ok
Route::put('/user/update/{id}', 'UserController@update')->where('id', '[0-9]+'); // ok
Route::get('user/destroy/{id}', 'UserController@destroy')->where('id', '[0-9]+'); // ok

//Coleção rotas
Route::get('colecao/create/{id}', 'ColecaoController@create')->where('id', '[0-9]+'); // ok
Route::post('colecao/store','ColecaoController@store'); // ok
Route::get('colecao/edit/{id}', 'ColecaoController@edit'); // ok
Route::put('colecao/update/{id}', 'ColecaoController@update'); // ok
Route::get('colecao/destroy/{id}', 'ColecaoController@destroy'); // 

// upload rotas
Route::get('upload', 'UserController@foto'); // ok
Route::put('up/{id}', 'UserController@upload'); //ok

//Autenticação rotas
Auth::routes(); // ok
Route::get('/home', 'HomeController@index'); // ok
