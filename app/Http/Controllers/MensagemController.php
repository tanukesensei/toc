<?php

namespace toc\Http\Controllers;

use toc\User; // Model
use toc\Mensagem; // Model
use Illuminate\Http\Request;
use toc\Http\Requests\UserRequest; // Request
use Illuminate\Support\Facades\DB; // acesso ao sql
use Illuminate\Support\Facades\Auth; // acesso ao sql

class MensagemController extends Controller
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
    public function create($id_usuario)
    {
      if (Auth::id() != null) {
        $user = Auth::id();

        $users = User::find($user);
          if (empty($users)) {
             return "Usuário não cadastrado.";
           }
             return view('user.userMensagens')->with(array('u'=>$user, 'users' => $users, 'destinatario'=>$id_usuario));
           }
           else
           {
             return redirect()->action('UserController@usuario');
           }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //dd($request);
        $created_at = date('d/m/Y H:i');
        //dd($created_at);
        $mensagem = new Mensagem;
        $mensagem->id_usuario = $request->id_usuario;
        $mensagem->id_destinatario = $request->id_destinatario;
        $mensagem->mensagens = $request->mensagens;
        $mensagem->created_at = $created_at;
        //dd($mensagem);
        $mensagem->save();
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
