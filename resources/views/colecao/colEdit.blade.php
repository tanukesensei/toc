@extends('layouts.dashboard')

@section('content')
<class class="content">
  <div class="container-fluid" style="padding-top: 75px;">
    <div class="row2">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header card-header-primary card-colecao">
            <h4 class="card-title">Editar Coleção</h4>
          </div>

          <div class="card-body">

        <form action="/colecao/update/{{$col->id}}" method="post" enctype="multipart/form-data">
          <div class="row2">
            <!-- COMEÇO DO FORM -->
                 {!! method_field('put') !!}
            <input type="hidden" name="_token" value="{{csrf_token()}}">

            <input type="text" name="nome" value="{{$col->nome}}" class="form-control"  maxlength="50" required>

            @if ($col->descricao)
            <textarea name="descricao" rows="4" cols="40" class="form-control" value="{{$col->descricao}}" maxlength="150" required>{{$col->descricao}}</textarea>
            @else
            <textarea name="descricao" rows="8" cols="80" placeholder="Descrição" class="form-control" maxlength="150" required></textarea>
            @endif

            <input type="text" name="mediapag" value="{{$col->mediapag}}" placeholder="Número médio de Páginas" class="form-control" required>

            <input type="text" name="numedicoes" value="{{$col->numedicoes}}" placeholder="Número de Edições" class="form-control" required>

            <input type="text" name="autor" value="{{$col->autor}}" placeholder="Autor" class="form-control" maxlength="50" required>

            <select class="" name="editora" class="form-control" required>
              <option value="" selected disabled hidden>Escolha a editora</option>
      @foreach ($editora as $e)
              <option value="{{$e->id}}" required>{{$e->nome}}</option>
      @endforeach
            </select>

            <select class="" name="categoria" class="form-control" required>
              <option value="" selected disabled hidden>Escolha a categoria de sua coleção</option>
      @foreach($categoria as $c)
              <option value="{{$c->id}}" required>{{$c->nome}}</option>
      @endforeach
            </select>

            <input type="file" name="foto" class="btn btn-primary" required>

            <input type="hidden" name="usuario" value="{{Auth::user()->id}}">
            <input type="submit" name="enviar" value="Enviar" class="btn btn-primary">

            <!-- FINAL DO FORMULÁRIO -->
          </div>
        </form>


          </div>

        </div>
      </div>
    </div>
  </div>
</class>
@endsection
