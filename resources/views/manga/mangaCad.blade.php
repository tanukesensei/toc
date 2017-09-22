<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="manga/store" method="post">
      <input type="hidden" name="_token" value="{{csrf_token}}">

      <input type="text" name="titulo" value="">
      <input type="text" name="descricao" value="">
      <input type="text" name="numeropag" value="">
      <input type="text" name="numeroedicao" value="">
      <input type="text" name="isbn" value="">
      <input type="text" name="colecao" value="">
      <input type="text" name="autor" value="">
      <select class="" name="editora">
        <option value="" selected disabled hidden>Editora</option>
      </select>


    </form>
  </body>
</html>
