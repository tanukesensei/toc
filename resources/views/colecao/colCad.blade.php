<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!-- tudo OK -->
    <form class="" action="/colecao/store" method="post">
      <input type="hidden" name="_token" value="{{csrf_token()}}">

      <input type="text" name="nome" placeholder="Nome da coleção">

      <input type="text" name="descricao" value="" placeholder="Descrição">

      <input type="text" name="mediapag" value="" placeholder="Número médio de Páginas">

      <input type="text" name="numedicoes" value="" placeholder="Número de Edições">

      <input type="text" name="autor" value="" placeholder="Autor">

      <select class="" name="editora">
        <option value="" selected disabled hidden>Escolha a editora</option>
@foreach ($editora as $e)
        <option value="{{$e->id}}">{{$e->nome}}</option>
@endforeach
      </select>

      <select class="" name="categoria">
        <option value="" selected disabled hidden>Escolha a categoria de sua coleção</option>
@foreach ($categoria as $c)
        <option value="{{$c->id}}">{{$c->nome}}</option>
@endforeach
      </select>

      <input type="hidden" name="usuario" value="{{Auth::user()->id}}">
      <input type="submit" name="enviar" value="Enviar">

    </form>
  </body>
</html>
