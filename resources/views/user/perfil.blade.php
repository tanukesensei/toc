<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Perfil</title>
  </head>
  <body>
    @foreach ($users as $u)

    <input type="hidden" name="id" value="{{ $u->id }}">
    <h3>Bem vindo
      @if (empty($u->username))
      {{$u->email}}
      @else
      {{$u->username}}
      @endif
    </h3>
    <h5>Sobre Min: {{$u->descricao}}</h5>

    @endforeach
  </body>
</html>
