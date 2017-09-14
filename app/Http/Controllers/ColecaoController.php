<?php

namespace toc\Http\Controllers;

use toc\Colecao; //model
use toc\Categoria; // Model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use toc\Http\Requests\CategoriaRequest; // Request
use toc\Http\Requests\ColecaoRequest; // Request

class ColecaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $categoria = Categoria::all();
        return view('colecao.colCad')->with('categoria', $categoria);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ColecaoRequest $request)
    {
        Colecao::create($request->all());
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
          return  "Colecao não cadastrada.";
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
}
