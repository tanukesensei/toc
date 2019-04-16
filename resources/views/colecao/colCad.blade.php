@extends('layouts.dashboard')

@section('content')

<class class="content">
  <div class="container-fluid" style="padding-top: 75px;">
    <div class="row2">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header card-header-primary card-colecao">
            <h4 class="card-title">Cadastrado de Coleção</h4>
          </div>

          <div class="card-body">
            <div class="row2">

            <form class="" action="/colecao/store" method="post"  class="form-group" enctype="multipart/form-data">


                  <input type="hidden" name="_token" value="{{csrf_token()}}">

                  <input type="text" name="nome" placeholder="Nome da coleção" class="form-control" maxlength="50" required>

                  <input type="text" name="descricao" value="" placeholder="Descrição" class="form-control" maxlength="150" required>

                  <input type="number" name="mediapag" value="" placeholder="Número médio de Páginas" class="form-control" required>

                  <input type="number" name="numedicoes" value="" placeholder="Número de Edições" class="form-control" required>

                  <input type="text" name="autor" value="" placeholder="Autor" class="form-control" maxlength="50" required>

                  <select class="" name="editora" class="form-control" required>
                                  <option value="" selected disabled hidden>Escolha a editora</option>
                  @foreach ($editora as $e)
                                  <option value="{{$e->id}}">{{$e->nome}}</option>
                  @endforeach
                                </select>

                  <select class="" name="categoria" class="form-control" required>
                                  <option value="" selected disabled hidden>Escolha a categoria de sua coleção</option>
                  @foreach ($categoria as $c)
                                  <option value="{{$c->id}}">{{$c->nome}}</option>
                  @endforeach
                                </select>

                  <input type="file" name="foto" class="btn btn-primary" required>

                  <input type="hidden" name="usuario" value="{{Auth::user()->id}}">
                  <input type="submit" name="enviar" value="Enviar" class="btn btn-primary">
                </div>
              </form>

          </div>

        </div>
      </div>
    </div>
  </div>
</class>
@endsection
