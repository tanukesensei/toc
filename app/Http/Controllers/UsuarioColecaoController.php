<?php

namespace toc\Http\Controllers;

use toc\Colecao; // Model
use toc\User; // Model
use toc\UsuarioColecao; // Model
use Illuminate\Http\Request;use Illuminate\Support\Facades\DB; // acesso ao sql
use Illuminate\Support\Facades\Auth; // acesso ao sql
use toc\Http\Requests\ColecaoRequest; //Request
use toc\Http\Requests\UserRequest;
use toc\Http\Requests\UsuarioColecaoRequest;

class UsuarioColecaoController extends Controller
{
    public function create()
    {
      //
    }

    public function store($id_colecao)
    {
      $uc = new UsuarioColecao;
      $uc->id_usuario = Auth::id();
      $uc->id_colecao = $id_colecao;
      $uc->save();
    }

    public function lista_usuarios($id_colecao)
    {
      $id_usuario = Auth::id();
      $user = $id_usuario;
      $users = User::find($user);
      $id_colecao = $id_colecao;
      //$lista = DB::select("select * from usuario_colecaos where id_colecao = $id_colecao and id_usuario != $id_usuario");

      $lista = DB::select("select users.* from users join usuario_colecaos on usuario_colecaos.id_usuario=users.id and usuario_colecaos.id_usuario!=$id_usuario and usuario_colecaos.id_colecao=$id_colecao");

      return view('user.userList')->with(array('u' => $user, 'users' => $users, 'lista' => $lista));
    }
}
