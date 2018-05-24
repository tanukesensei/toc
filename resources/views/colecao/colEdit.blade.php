@extends('layouts.dashboard')

@section('content')
    <div class="container">

      <form class="" action="/colecao/update/{{$col->id}}" method="post" enctype="multipart/form-data"
        class="form-group">
        {!! method_field('put') !!}
        <input type="hidden" name="_token" value="{{csrf_token()}}">

        <input type="text" name="nome" value="{{$col->nome}}" class="form-control">

        @if ($col->descricao)
        <textarea name="descricao" rows="8" cols="80" class="form-control">{{$col->descricao}}</textarea>
        @else
        <textarea name="descricao" rows="8" cols="80" placeholder="Descrição" class="form-control"></textarea>
        @endif

        <input type="text" name="mediapag" value="" placeholder="Número médio de Páginas" class="form-control">

        <input type="text" name="numedicoes" value="" placeholder="Número de Edições" class="form-control">

        <input type="text" name="autor" value="" placeholder="Autor" class="form-control">

        <select class="" name="editora" class="form-control">
          <option value="" selected disabled hidden>Escolha a editora</option>
  @foreach ($editora as $e)
          <option value="{{$e->id}}">{{$e->nome}}</option>
  @endforeach
        </select>

        <select class="" name="categoria" class="form-control">
          <option value="" selected disabled hidden>Escolha a categoria de sua coleção</option>
  @foreach($categoria as $c)
          <option value="{{$c->id}}">{{$c->nome}}</option>
  @endforeach
        </select>

        <input type="file" name="foto" class="btn btn-primary">

        <input type="hidden" name="usuario" value="{{Auth::user()->id}}">
        <input type="submit" name="enviar" value="Enviar" class="btn btn-primary">

      </form>
    </div>
@endsection
