<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="/colecao/update/{{$col->id}}" method="post" enctype="multipart/form-data">
      {!! method_field('put') !!}
      <input type="hidden" name="_token" value="{{csrf_token()}}">
      <input type="text" name="nome" value="{{$col->nome}}">
      @if ($col->descricao)
      <textarea name="descricao" rows="8" cols="80">{{$col->descricao}}</textarea>
      @else
      <textarea name="descricao" rows="8" cols="80" placeholder="Descrição"></textarea>
      @endif
      <input type="file" name="foto">

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
