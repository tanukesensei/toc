<?php

namespace toc\Http\Controllers;

use toc\Autor; // Model
use toc\Categoria; // Model
use toc\Colecao; //model
use toc\Editora; // Model
use toc\Hq; // Model
use toc\Livro; // Model
use toc\Manga; // Model
use toc\Revista; // Model
use toc\User; // Model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // acesso ao sql
use Illuminate\Support\Facades\Auth; // acesso ao sql
use toc\Http\Requests\AutorRequest; // Request
use toc\Http\Requests\CategoriaRequest; // Request
use toc\Http\Requests\ColecaoRequest; // Request
use toc\Http\Requests\EditoraRequest; // Request
use toc\Http\Requests\HqRequest; // Request
use toc\Http\Requests\LivroRequest; // Request
use toc\Http\Requests\MangaRequest; // Request
use toc\Http\Requests\RevistaRequest; // Request
use toc\Http\Requests\UserRequest; // Request

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
        $autor = $colecao->autor;
        $Autor = new Autor ;
        $Autor->nome = $autor;
        $Autor->save();

        $autorId = DB::table('autor')->select('id')->orderBy('id', 'desc')->limit(1)->get();
        $autor = $autorId[0]->id;

        $categoria = $colecao->categoria;
        if($categoria == 1){
          $livros = new Livro();
          $livros->titulo = $colecao->nome;
          $livros->sinopse = $colecao->descricao;
          $livros->numeropag = $colecao->mediapag;
          //$livros->numeroedicao = $colecao->numedicoes;
          $livros->isbn = $colecao->isbn;
          $livros->colecao = $id;
          $livros->autor = $autor;
          $livros->editora_id = $colecao->editora;
          $livros->save();
        }
        if ($categoria == 2) {
          // code...
          $hqs = new HQ();
          $hqs->titulo = $colecao->nome;
          $hqs->descricao = $colecao->descricao;
          //$hqs->numeropag = $colecao->mediapag; // marcer de novo depois
          $hqs->numeroedicao = $colecao->numedicoes;
          //$hqs->isbn = $colecao->isbn; // marcer de novo depois
          $hqs->colecao = $id;
          $hqs->autor = $autor;
          $hqs->editora_id = $colecao->editora;
          $hqs->save();
        }
        if ($categoria == 3) {
           $mangas = new Manga();
           $mangas->titulo = $colecao->nome;
           $mangas->descricao = $colecao->descricao;
           $mangas->numeropag = $colecao->mediapag;
           $mangas->numeroedicao = $colecao->numedicoes;
           $mangas->isbn = $colecao->isbn;
           $mangas->colecao = $id;
           $mangas->autor = $autor;
           $mangas->editora_id = $colecao->editora;
           $mangas->save();
        }
        if ($categoria == 4) {
          // code...
          $revistas = new Revista();
          $revistas->titulo = $colecao->nome;
          $revistas->descricao = $colecao->descricao;
          //$revistas->numeropag = $colecao->mediapag;
          $revistas->numeroedicao = $colecao->numedicoes;
          //$revistas->isbn = $colecao->isbn;
          $revistas->colecao = $id;
          $revistas->autor = $autor;
          $revistas->editora_id = $colecao->editora;
          $revistas->save();
        }

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
        $col = Colecao::find($id);
        if (empty($col)) {
          return  "Coleção não cadastrada.";
        }
        $user = Auth::id();
        //$colecao = DB::select("select * from colecao where usuario = $user order by id desc");
        //dd($colecao);
        $categoria = Categoria::all();
        $editora = Editora::all();
        return view('colecao.colEdit')->with(array('u' => $user, 'col' => $col, 'categoria' => $categoria,
      'editora' => $editora));
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function livros($id)
    {
      if (User::find($id) AND Auth::id()!=null)
          {  //confirma o usuário logado

            $usuario = Auth::id(); // pega o ID do usuário logado para passar para o Dashboard.
            $users = User::find($id); //acha todas as informações do usuário
            $user = $users->id; //repassa só o ID do usuário
            $colecao = DB::select("select * from colecao where usuario = $user AND categoria = 1 order by nome asc"); // seleciona todas as coleções de livros desse usuário
            //dd($colecao);
            return view('colecao.colLivros')->with(array('u'=> $usuario, 'colecao' => $colecao));


          } elseif (User::find($id)==null AND Auth::id()!=null) {
            return "usuário não cadastrado.";
          } else {
            return redirect()->action('HomeController@index');
          }
    }

    public function revistas($id)
    {
      if (User::find($id) AND Auth::id()!=null)
          {  //confirma o usuário logado

            $usuario = Auth::id(); // pega o ID do usuário logado para passar para o Dashboard.
            $users = User::find($id); //acha todas as informações do usuário
            $user = $users->id; //repassa só o ID do usuário
            $colecao = DB::select("select * from colecao where usuario = $user AND categoria = 4 order by nome asc"); // seleciona todas as coleções de Revistas desse usuário
            //dd($colecao);
            return view('colecao.colRevistas')->with(array('u'=> $usuario, 'colecao' => $colecao));


          } elseif (User::find($id)==null AND Auth::id()!=null) {
            return "usuário não cadastrado.";
          } else {
            return redirect()->action('HomeController@index');
          }
    }

    public function mangas($id)
    {
      if (User::find($id) AND Auth::id()!=null)
      {  //confirma o usuário logado

        $usuario = Auth::id();
        $users = User::find($id); //acha todas as informações do usuário
        $user = $users->id; //repassa só o ID do usuário
        $colecao = DB::select("select * from colecao where usuario = $user AND categoria = 3 order by nome asc"); // seleciona todas as coleções de mangás desse usuário
        //dd($colecao);
        return view('colecao.colMangas')->with(array('u'=> $usuario, 'colecao' => $colecao));


      } elseif (User::find($id)==null AND Auth::id()!=null) {
        return "usuário não cadastrado.";
      } else {
        return redirect()->action('HomeController@index');
      }
    }

    public function hqs($id)
    {
      if (User::find($id) AND Auth::id()!=null)
      {  //confirma o usuário logado

        $usuario = Auth::id();
        $users = User::find($id); //acha todas as informações do usuário
        $user = $users->id; //repassa só o ID do usuário
        $colecao = DB::select("select * from colecao where usuario = $user AND categoria = 2 order by nome asc"); // seleciona todas as coleções de HQ's desse usuário
        //dd($colecao);
        return view('colecao.colHqs')->with(array('u'=> $usuario, 'colecao' => $colecao));


      } elseif (User::find($id)==null AND Auth::id()!=null) {
        return "usuário não cadastrado.";
      } else {
        return redirect()->action('HomeController@index');
      }
    }

    public function buscar(ColecaoRequest $busca)
    {
      $pesquisar = $busca->busca;
      $usuario = Auth::id();

      $resultado = DB::select("select * from colecao where nome ilike '%$pesquisar%' OR autor ilike '%$pesquisar%'");

      //dd($resultado);

      return view('colecao.resultado')->with(array('resultado' => $resultado, 'u' => $usuario));

      // TERMINAR ESSA CARAMBA!!
    }
}
