<?php

namespace toc\Http\Controllers;

use toc\User; // Model
use toc\Colecao; //model
use toc\Editora; // Model
use toc\Categoria; // Model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // acesso ao sql
use Illuminate\Support\Facades\Auth; // acesso ao sql
use toc\Http\Requests\UserRequest; // Request
use toc\Http\Requests\ColecaoRequest; // Request
use toc\Http\Requests\EditoraRequest; // Request
use toc\Http\Requests\CategoriaRequest; // Request

class ColecaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$colecoes = DB::select('select * colecao');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $user = Auth::id();
        $categoria = Categoria::all();
        $editora = Editora::all();
        return view('colecao.colCad')->with(array('u' => $user, 'categoria' => $categoria, 'editora' => $editora));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ColecaoRequest $request)
    {

        $colecao = Colecao::create($request->all());
        $id = $colecao->id; // rolou amor
        //$view = $colecao->categoria;
        //return view('manga.mangaCad')->with('id', $id);
        //tava aqui
        $path = $request->file("foto")->store("colecao");
        // A $pasta com o caminho é jogada para dentro do campo imagen da tabela users
        $colecao->imagem = $path;
        $colecao->update();
        // O update é realizado.
        return redirect()->action('UserController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $col = Colecao::find($id);
        if (empty($col)) {
          return  "Coleção não cadastrada.";
        }
        $categoria = Categoria::all();
        return view('colecao.colEdit')->with(array('col' => $col, 'categoria' => $categoria));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // totalmente funcional
        $c = Colecao::find($id);
        $path = $request->file("foto")->store("colecao");
        $c->imagem = $path;
        $c->update($request->all());
        return redirect()->action('UserController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Colecao::find($id)->delete();
        return redirect()->action('UserController@index');
    }

    public function dashboard()
    {
      if (Auth::id() != null) {
        $user = Auth::id();// pega o id do usuário logado com muita alegria xD
        $users = DB::select("select * from users where id = $user");
        return view('layouts.dashboard')->with(array('u' => $user, 'users' => $users));
      }
      return redirect()->action('HomeController@index');
    }
}
