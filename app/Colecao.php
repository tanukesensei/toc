<?php

namespace toc;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Colecao extends Model
{
  use Searchable;

  protected $table = 'colecao';

  protected $fillable = array('nome', 'descricao', 'imagem',
   'categoria', 'usuario', 'mediapag', 'numedicoes', 'isbn',
   'autor', 'editora');

  protected $guarded = ['id'];

  public $timestamps = false;
}
