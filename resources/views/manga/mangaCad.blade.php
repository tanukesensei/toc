<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="manga/store" method="post">
      <input type="hidden" name="_token" value="{{csrf_token()}}">

      <input type="text" name="titulo" value="" placeholder="Titulo">
      <input type="text" name="descricao" value="" placeholder="Descrição">
      <input type="text" name="numeropag" value="" placeholder="Número de Páginas">
      <input type="text" name="numeroedicao" value="" placeholder="Número da Edição">
      <input type="text" name="isbn" value="" placeholder="Código ISBN">
      <input type="text" name="colecao" value="" placeholder="[id da coleção]">
      <input type="text" name="autor" value="" placeholder="Autor">
      <select class="" name="editora">
        <option value="" selected disabled hidden>Editora</option>
        <option value="">editora1</option>
      </select>


    </form>
  </body>
</html>
