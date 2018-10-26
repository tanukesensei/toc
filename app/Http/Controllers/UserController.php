<?php

namespace toc\Http\Controllers;

use toc\Autor; // Model
use toc\Colecao; // Model
use toc\Editora;
use toc\Manga; // Model
use toc\User; // Model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // acesso ao sql
use Illuminate\Support\Facades\Auth; // acesso ao sql
use toc\Http\Requests\MangaRequest;
use toc\Http\Requests\ColecaoRequest; //Request
use toc\Http\Requests\UserRequest; // Request

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      if (Auth::id() != null) {
        $user = Auth::id();// pega o id do usuário logado com muita alegria xD
        $users = DB::select("select * from users where id = $user");
        return view('user.perfil')->with(array('u' => $user, 'users' => $users));
      }
      return redirect()->action('HomeController@index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('user.userCad');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        /*
        $user = new User;
        $user->name = $request->name;
        $user->genero = $request->genero;
        $user->datanascimento = $request->datanascimento;
        $user->cidade = $request->cidade;
        $user->estado = $request->estado;
        $user->email = $request->email;
        $user->username = $request->username;
        $user->password = $request->password;
        $user->save();
        */
        User::create($request->all());

        return redirect()->action('UserController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \toc\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

      if (Auth::id() != null) {
        $usuario = Auth::id();// pega o id do usuário logado com muita alegria xD
        /*
        $users = DB::select("select * from users where id = $user");
        return view('layouts.dashboard')->with(array('u' => $user, 'users' => $users));
        */

        $users = User::find($id);
        if (empty($users)) {
          return "Usuario não cadastrado.";
        }
        $user = $users->id;
        $colecao = DB::select("select * from colecao where usuario = $user order by nome asc");
        //dd($colecao);

        return view('user.show')->with(array('u' => $usuario, 'users' => $users, 'colecao' => $colecao));
        } else {
          return redirect()->action('HomeController@index');
        }

  }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \toc\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      if (Auth::id() != null) {
        $user = Auth::id();

        $users = User::find($id);
        if (empty($users)) {
          return  "Usuário não cadastrado.";
        }
          return view('user.userEdit')->with(array('u'=>$user, 'users'=> $users));
      }
      else
      {
        return redirect()->action('HomeController@index');
      }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \toc\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {
        $users = User::find($id);
        $users->update($request->all());
        return redirect()->action('UserController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \toc\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->action('UserController@index');
    }

    public function foto()
    {
      return view('upload');
    }

    public function upload(Request $request, $id)
    {
        // acha o ID do usuário
      $user = User::find($id);
      // File(foto) pega o arquivo e joga pra dentro da pasta avatar com o comando store.
      // $path recebe o a pasta+novo hash do arquivo.
      $path = $request->file("foto")->store("avatar");
      // A $pasta com o caminho é jogada para dentro do campo imagen da tabela users
      $user->imagem = $path;
      // O update é realizado.
      $user->update();
      // Redireciona para a index do usuários.
      return redirect()->action('UserController@index');
    }

    public function usuario()
    {
      $id = Auth::id();
      $users = User::find($id);
      if (empty($users)) {
        //return "Usuario não cadastrado.";
        return redirect()->action('HomeController@index');
      }
      $user = $users->id;
      $livros = DB::select("select colecao.* from colecao
        inner join usuario_colecaos on usuario_colecaos.id_colecao = colecao.id
        inner join users u on u.id = usuario_colecaos.id_usuario
        where u.id = $user and colecao.categoria = 1");

      $hqs = DB::select("select colecao.* from colecao
        inner join usuario_colecaos on usuario_colecaos.id_colecao = colecao.id
        inner join users u on u.id = usuario_colecaos.id_usuario
        where u.id = $user and colecao.categoria = 2");

      $mangas = DB::select("select colecao.* from colecao
        inner join usuario_colecaos on usuario_colecaos.id_colecao = colecao.id
        inner join users u on u.id = usuario_colecaos.id_usuario
        where u.id = $user and colecao.categoria = 3");

      $revistas = DB::select("select colecao.* from colecao
        inner join usuario_colecaos on usuario_colecaos.id_colecao = colecao.id
        inner join users u on u.id = usuario_colecaos.id_usuario
        where u.id = $user and colecao.categoria = 4");
        
      $totalLivros = count($livros);
      $totalRevistas = count($revistas);
      $totalMangas = count($mangas);
      $totalHqs = count($hqs);
      //dd(array($totalLivros, $totalRevistas, $totalMangas, $totalHqs));

      //return view('user.usuario')->with("mangas", $totalMangas); OK
      return view('user.usuario')->with(array('u' => $user, 'livros' => $totalLivros,  'hqs' => $totalHqs, 'mangas' => $totalMangas, 'revistas' => $totalRevistas));
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
