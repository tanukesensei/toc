@extends('layouts.dashboard')

@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-plain">
          <div class="card-header card-header-primary card-colecao" color="white">
            <h4 class="card-title mt-0">Usuários com a mesma coleção</h4>
          </div>
<!-- Body da lista Abaixo-->

          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover">
                <thead class="">
                  <th>Usuário</th> <th>Perfil</th> <th>Chat</th>
                </thead>
                <tbody>
                  @foreach ($lista as $L)
                  <tr>
                    <td>{{ $L->name }}</td>
                    <td><a href="/user/show/{{$L->id}}">Conhecer</a></td>
                    <td>
                      <a href="/user/mensagens/{{$L->id}}">Conversar</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>

<!-- End do body ACIMA-->


//teste do Chat





// fim do teste do chat
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
