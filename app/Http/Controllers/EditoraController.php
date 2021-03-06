<?php

namespace toc\Http\Controllers;

use toc\User; // Model
use toc\Editora; // Model
use Illuminate\Http\Request;
use toc\Http\Requests\UserRequest;
use toc\Http\Requests\EditoraRequest;
use Illuminate\Support\Facades\DB; // acesso ao sql
use Illuminate\Support\Facades\Auth; // acesso ao sql

class EditoraController extends Controller
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
    public function create()
    {
      if (Auth::id() != null) {
        $user = Auth::id();
        $users = User::find($user);

        if (empty($users)) {
          return "Usuário não cadastrado.";
        }

        return view('editora.editoCad')->with(array('u' => $user, 'users' => $users));

      } else {
      return redirect()->action('UserController@usuario');
      }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EditoraRequest $request)
    {
      $editora = new Editora;
      $editora->nome = $request->nome;
      $editora->save();

      return redirect()->action('UserController@usuario');
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
