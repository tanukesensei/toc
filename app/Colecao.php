<?php

namespace toc;

use Illuminate\Database\Eloquent\Model;

class Colecao extends Model
{
  protected $table = 'colecao';

  protected $fillable = array('nome', 'descricao', 'imagem',
   'categoria', 'usuario');

  protected $guarded = ['id'];

  public $timestamps = false;
}
