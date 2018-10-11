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
}
