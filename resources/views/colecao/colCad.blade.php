<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="/colecao/store" method="post">
      <input type="hidden" name="_token" value="{{csrf_token()}}">

      <input type="text" name="nome" placeholder="Nome da coleção">
<!-- daqui pra cima ta rolando -->

      <input type="text" name="descricao" value="" placeholder="Descrição">

      <input type="text" name="numeropag" value="" placeholder="Número de Páginas">

      <input type="text" name="numeroedicao" value="" placeholder="Número da Edição">

      <input type="text" name="isbn" value="" placeholder="Código ISBN">

      <input type="text" name="autor" value="" placeholder="Autor">

      <select class="" name="editora">
        <option value="" selected disabled hidden>Editora</option>
        <option value="">editora1</option>
      </select>

<!-- daqui pra baixo ta rolando-->
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
