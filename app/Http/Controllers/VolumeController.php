<?php

namespace toc\Http\Controllers;

use toc\User; // Model
use toc\Colecao; //model
use toc\Volumes; // Model
use Illuminate\Support\Facades\DB; // acesso ao sql
use Illuminate\Support\Facades\Auth; // acesso a autenticação
use Illuminate\Http\Request;
use toc\Http\Requests\UserRequest; // Request
use toc\Http\Requests\ColecaoRequest; // Request
use toc\Http\Requests\VolumesRequest; // Request

class VolumeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $id_usuario = auth::id();
        $id_colecao = $id;

        $resultados = DB::select("select numedicoes from colecao where id = $id_colecao");
        $resultado = $resultados[0];
        $n = $resultado->numedicoes;

        return view('volumes.volColecao')->with(array('u' => $id_usuario, 'col' => $id_colecao, 'volumes' => $n));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id_colecao)
    {
      $id_user = auth::id();
      $id_col = $id_colecao;

      return view('volumes.volCad')->with(array('u' => $id_user, 'col' => $id_col));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VolumesRequest $request)
    {
        $id = $request->id_colecao; //passa o id p/ o redirect voltar para a coleção certa

        $v = new Volumes();
        $v->id_usuario = $request->id_usuario; // funcionou dessa forma!
        $v->id_colecao = $request->id_colecao;
        $v->titulo_volume = $request->titulo_volume;
        $v->descricao = $request->descricao;
        $path = $request->file("capa")->store("capas");// capa =name do arquivo. Capas = nome da pasta
        $v->imagem = $path;
        $v->save();

        return redirect()->action('VolumeController@index', ['id' => $id]);
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
        //
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
        //
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
    }
}
