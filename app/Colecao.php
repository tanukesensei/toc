<?php

namespace toc;

use Illuminate\Database\Eloquent\Model;

class Colecao extends Model
{
  protected $table = 'colecao';

  protected $fillable = array('nome', 'descricao', 'imagem',
   'categoria', 'usuario', 'mediapag', 'numedicoes', 'isbn',
   'autor', 'editora');

  protected $guarded = ['id'];

  public $timestamps = false;
}
