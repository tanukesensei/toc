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
Route::get('/user/perfil', 'UserController@index');
Route::get('/user/create', 'UserController@create');
Route::post('/user/store', 'UserController@store');
Route::get('/user/show/{id}', 'UserController@show')->where('id', '[0-9]+');
Route::get('/user/edit/{id}', 'UserController@edit')->where('id', '[0-9]+');
Route::put('/user/update/{id}', 'UserController@update')->where('id', '[0-9]+');
Route::get('user/destroy/{id}', 'UserController@destroy')->where('id', '[0-9]+');

//Coleção rotas
Route::get('colecao/create/{id}', 'ColecaoController@create')->where('id', '[0-9]+');
Route::post('colecao/store','ColecaoController@store');
Route::get('colecao/edit/{id}', 'ColecaoController@edit');

// upload rotas
Route::get('upload', 'UserController@foto');
Route::post('up', 'UserController@upload');

//Autenticação rotas
Auth::routes();
Route::get('/home', 'HomeController@index');
