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
          <h3>Cadastro de Usuários</h3>
          <form action="/user/store" method="post" class="form-group">

            <input type="hidden" name="_token" value="{{{ csrf_token() }}}">

            <div class="form-group">

              <input type="text" name="nome" placeholder="Nome" value="" class="form-control">
              <select class="form-control" name="genero">
                <option value="" selected disabled hidden>Escolha seu Gênero</option>
                <option value="F">Feminino</option>
                <option value="M">Masculino</option>
                <option value="O">Outro</option>
              </select>
              <input type="text" name="datansacimento" placeholder="Data de Nascimento" value="" class="form-control">
              <input type="text" name="cidade" placeholder="Cidade" value="" class="form-control">
              <input type="text" name="estado" placeholder="Estado" value="" class="form-control">
              <input type="text" name="email" placeholder="E-mail" value="" class="form-control">
              <input type="text" name="username" placeholder="Nome de Usuário" value="" class="form-control">
              <input type="password" name="senha" placeholder="Senha" value="" class="form-control">
              <button type="submit" class="btn btn-primary btn-block" name="button">Cadastrar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>
