@extends('layouts.dashboard')

@section('content')

<class class="content">
  <div class="container-fluid"  style="padding-top: 75px;">
    <div class="row2">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header card-header-primary card-colecao">
            <h4 class="card-title">cadastrado de Categoria</h4>
          </div>

          <div class="card-body">

              <form action="/categoria/store" method="post" enctype="multipart/form-data">
                <div class="row2">
                  <!-- COMEÇO DO FORM -->
              <input type="hidden" name="_token" value="{{csrf_token()}}">

              <input type="text" name="nome" placeholder="Categoria Ex: Livro, Mangás, etc..." class="form-control">

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
