<?php

namespace toc\Http\Controllers;

use toc\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use toc\Http\Requests\UserRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $users = DB::select('select * from users');
      return view('user.perfil')->with('users', $users);
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
        $user->nome = $request->nome;
        $user->genero = $request->genero;
        $user->datanascimento = $request->datanascimento;
        $user->cidade = $request->cidade;
        $user->estado = $request->estado;
        $user->email = $request->email;
        $user->username = $request->username;
        $user->senha = $request->senha;
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
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \toc\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::find($id);
        if (empty($users)) {
          return  "Usuário não cadastrado.";
        }
        return view('user.userEdit')->with('u', $users);
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
    public function destroy(User $user)
    {
        return 'Destruido.';
    }
}
