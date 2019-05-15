@extends('layouts.dashboard')

@section('content')

<class class="content">
  <div class="container-fluid" style="padding-top: 75px;">
    <div class="row2">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header card-header-primary card-colecao">
            <h4 class="card-title">Edição de Volumes</h4>
          </div>

          <div class="card-body">
            <div class="row2">

            <form class="" action="/volumes/update/{{$volumes->id}}" method="post"  class="form-group" enctype="multipart/form-data">

            {!! method_field('put') !!}


            <input type="hidden" name="_token" value="{{csrf_token()}}">

            <input type="hidden" name="id_usuario" value="{{ $u }}" class="form-control" required>

            <input type="hidden" name="id_colecao" value="{{$volumes->id_colecao}}" class="form-control" required>

            <input type="text" name="titulo_volume" value="{{ $volumes->titulo_volume }}" placeholder="Titulo do Volume" class="form-control" maxlength="50" required>

            <input type="text" name="descricao" value="{{ $volumes->descricao }}" placeholder="Descrição" class="form-control" maxlength="150" required>

            <input type="file" name="capa" class="btn btn-primary" required>

            <input type="submit" name="enviar" value="Enviar" class="btn btn-primary">

            </form>
          </div>

          </div>

        </div>
      </div>
    </div>
  </div>
</class>
@endsection
