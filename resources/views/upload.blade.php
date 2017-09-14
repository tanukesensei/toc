<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>upload</title>
  </head>
  <body>
    <form class="form-group" action="/up/{{Auth::user()->id}}" method="post" enctype="multipart/form-data">
      {!! method_field('put') !!}
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <input type="file" name="foto">
      <input type="submit" name="enviar" value="Enviar">
    </form>
  </body>
</html>
