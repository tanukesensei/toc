<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="/colecao/update" method="post">
      {!! method_field('put') !!}
      <input type="hidden" name="_token" value="{{csrf_token()}}">
      <input type="text" name="nome" value="{{$col->nome}}">

      <select class="" name="categoria">
        <option value="" selected disabled hidden>Escolha a categoria de sua coleção</option>
@foreach($categoria as $c)
        <option value="{{$c->id}}">{{$c->nome}}</option>
@endforeach
      </select>

      <input type="hidden" name="usuario" value="{{Auth::user()->id}}">
      <input type="submit" name="enviar" value="Enviar">

    </form>
  </body>
</html>
