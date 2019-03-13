@extends('layouts.dashboard')

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
        <div class="card">
		        <div class="card-header card-header-primary card-colecao" color="white" ><h4>Digite sua mensagem:</h4></div>

              <form class="form-group" action="#" method="post">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <textarea name="name" rows="6" cols="60"></textarea>
                <button type="submit" name="button" class="btn btn-primary">Enviar</button>
              </form>

          </div>
      </div>
    </div>

</div>
@endsection
