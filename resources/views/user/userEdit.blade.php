@extends('layouts.dashboard')

@section('content')
<class class="content">
  <div class="container-fluid" style="padding-top: 75px;">
    <div class="row2">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header card-header-primary card-colecao">
            <h4 class="card-title">Edite suas informações</h4>
          </div>

          <div class="card-body">

            <form action="{{action('UserController@update', $users->id)}}" method="post" class="form-group">
            {!! method_field('put') !!}

            <input type="hidden" name="_token" value="{{csrf_token()}}">

              <input type="text" name="name" placeholder="Nome" value="{{$users->name}}" class="form-control">

              <select class="form-control" name="genero">
                <?php if (!empty($users->genero)){ ?>
                <option value="{{$users->genero}}" selected disabled hidden>{{$users->genero}}</option>
                <?php } else { ?>
                <option value="" selected disabled hidden>Escolha seu Gênero</option>
                <?php } ?>

                <option value="F">Feminino</option>
                <option value="M">Masculino</option>
                <option value="O">Outro</option>
              </select>
              <input type="text" name="datanascimento" placeholder="Data de Nascimento" value="{{$users->datanascimento}}" class="form-control">
              <input type="text" name="cidade" placeholder="Cidade" value="{{$users->cidade}}" class="form-control">

              <select class="form-control" name="estado">
                <?php if (!empty($users->estado)) { ?>
                <option value="{{$users->estado}}" selected disabled hidden>{{$users->estado}}</option>
                <?php } else { ?>
                <option value="" selected disabled hidden>Estado</option>
                <?php } ?>

                <option value="">Estado</option>
                <option value="AC">AC</option>
                <option value="AL">AL</option>
                <option value="AP">AP</option>
                <option value="AM">AM</option>
                <option value="BA">BA</option>
                <option value="CE">CE</option>
                <option value="DF">DF</option>
                <option value="ES">ES</option>
                <option value="GO">GO</option>
                <option value="MA">MA</option>
                <option value="MT">MT</option>
                <option value="MS">MS</option>
                <option value="MG">MG</option>
                <option value="PA">PA</option>
                <option value="PB">PB</option>
                <option value="PR">PR</option>
                <option value="PE">PE</option>
                <option value="PI">PI</option>
                <option value="RJ">RJ</option>
                <option value="RN">RN</option>
                <option value="RS">RS</option>
                <option value="RO">RO</option>
                <option value="RR">RR</option>
                <option value="SC">SC</option>
                <option value="SP">SP</option>
                <option value="SE">SE</option>
                <option value="TO">TO</option>
              </select>

              <input type="text" name="email" placeholder="E-mail" value="{{$users->email}}" class="form-control">
              <input type="text" name="username" placeholder="Nome de Usuário" value="{{$users->username}}" class="form-control">
              <button type="submit" class="btn btn-primary btn-block" name="button">Atualizar</button>

          </form>

          </div>

        </div>
      </div>
    </div>
  </div>
</class>
@endsection
