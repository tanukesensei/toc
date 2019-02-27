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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', function () {
    return view('toc');
}); //ok

// ROTA TESTE
//Route::get('teste', 'UserController@teste');

// user rotas
Route::get('/usuario', 'UserController@usuario'); // ok
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
Route::get('colecao/livros/{id}', 'ColecaoController@livros')->where('id', '[0-9]+'); //
Route::get('colecao/revistas/{id}', 'ColecaoController@revistas')->where('id', '[0-9]+'); //
Route::get('colecao/mangas/{id}', 'ColecaoController@mangas')->where('id', '[0-9]+'); // ok
Route::get('colecao/hqs/{id}', 'ColecaoController@hqs')->where('id', '[0-9]+'); //
Route::get('colecao/edit/{id}', 'ColecaoController@edit')->where('id', '[0-9]+'); // ok
Route::put('colecao/update/{id}', 'ColecaoController@update')->where('id', '[0-9]+'); // ok
Route::get('colecao/destroy/{id}', 'ColecaoController@destroy')->where('id', '[0-9]+'); // ok
Route::get('colecao/buscar', 'ColecaoController@buscar')->name('buscar'); //ok
Route::get('colecao/add/{id}', 'ColecaoController@adicionar'); //ok

//Route::get('manga/create', 'MangaController@create');
//Route::get('manga/create/{id}', 'MangaController@create');

// Mensagens
Route::get('/user/discord/{id}', 'UserController@discord');

// upload rotas
Route::get('upload', 'UserController@foto'); // ok
Route::put('up/{id}', 'UserController@upload')->where('id', '[0-9]+'); // ok

//Autenticação rotas
Auth::routes(); // ok
Route::middleware('auth')->group(function (){ //rotas que precisam de Autenticação
Route::get('/usuario', 'UserController@usuario'); // ok
});
