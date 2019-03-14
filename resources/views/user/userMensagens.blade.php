@extends('layouts.dashboard')

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
        <div class="card">
		        <div class="card-header card-header-primary card-colecao" color="white" ><h4>Digite sua mensagem:</h4></div>

              <form class="form-group" action="/mensagem/store" method="post">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="id_destinatario" value="{{$destinatario}}">
                <input type="hidden" name="id_usuario" value="{{ Auth::user()->id }}">
                <textarea name="mensagens" rows="6" cols="60"></textarea>
                <input type="submit" name="enviar" value="Enviar" class="btn btn-primary">
              </form>

          </div>
      </div>
    </div>

</div>
@endsection
