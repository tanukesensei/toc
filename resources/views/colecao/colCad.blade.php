@extends('layouts.dashboard')

@section('content')
    <!-- tudo OK -->

    <div class="container" style="padding-top: 75px;">
      <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
          <form class="" action="/colecao/store" method="post"  class="form-group" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{csrf_token()}}">

            <input type="text" name="nome" placeholder="Nome da coleção" class="form-control">

            <input type="text" name="descricao" value="" placeholder="Descrição" class="form-control">

            <input type="number" name="mediapag" value="" placeholder="Número médio de Páginas" class="form-control">

            <input type="number" name="numedicoes" value="" placeholder="Número de Edições" class="form-control">

            <input type="text" name="autor" value="" placeholder="Autor" class="form-control">

            <select class="" name="editora" class="form-control">
              <option value="" selected disabled hidden>Escolha a editora</option>
      @foreach ($editora as $e)
              <option value="{{$e->id}}">{{$e->nome}}</option>
      @endforeach
            </select>

            <select class="" name="categoria" class="form-control">
              <option value="" selected disabled hidden>Escolha a categoria de sua coleção</option>
      @foreach ($categoria as $c)
              <option value="{{$c->id}}">{{$c->nome}}</option>
      @endforeach
            </select>

            <input type="file" name="foto" class="btn btn-primary">

            <input type="hidden" name="usuario" value="{{Auth::user()->id}}">
            <input type="submit" name="enviar" value="Enviar" class="btn btn-primary">

          </form>
        </div>
      </div>
    </div>

@endsection
