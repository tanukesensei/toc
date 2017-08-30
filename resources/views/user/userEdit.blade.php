<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title></title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
          <h3>Edite suas informações</h3>
          <form action="{{action('UserController@update', $u->id)}}" method="post" class="form-group">
            {!! method_field('put') !!}

            <input type="hidden" name="_token" value="{{csrf_token()}}">

              <input type="text" name="name" placeholder="Nome" value="{{$u->name}}" class="form-control">

              <select class="form-control" name="genero">
                <?php if (!empty($u->genero)){ ?>
                <option value="{{$u->genero}}" selected disabled hidden>{{$u->genero}}</option>
                <?php } else { ?>
                <option value="" selected disabled hidden>Escolha seu Gênero</option>
                <?php } ?>

                <option value="F">Feminino</option>
                <option value="M">Masculino</option>
                <option value="O">Outro</option>
              </select>
              <input type="text" name="datanascimento" placeholder="Data de Nascimento" value="{{$u->datanascimento}}" class="form-control">
              <input type="text" name="cidade" placeholder="Cidade" value="{{$u->cidade}}" class="form-control">
              <input type="text" name="estado" placeholder="Estado" value="{{$u->estado}}" class="form-control">
              <input type="text" name="email" placeholder="E-mail" value="{{$u->email}}" class="form-control">
              <input type="text" name="username" placeholder="Nome de Usuário" value="{{$u->username}}" class="form-control">
              <button type="submit" class="btn btn-primary btn-block" name="button">Atualizar</button>

          </form>
        </div>
      </div>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>
