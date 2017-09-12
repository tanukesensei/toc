<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>upload</title>
  </head>
  <body>
    <form class="form-group" action="/up" method="post" enctype="multipart/form-data">
      {!! method_field('put') !!}
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <input type="hidden" id="id" value="{{Auth::user()->id}}" >
      <input type="file" name="foto">
      <img src="{{Storage::url('avatar/VOrvyVEdb7m3sxMDnQNBus1T1cX2XjVYVjkJBlKU.jpeg')}}" alt="">
      <input type="submit" name="enviar" value="enviar">
    </form>
  </body>
</html>
