<?php

namespace toc;

use Illuminate\Database\Eloquent\Model;

class verificacao extends Model
{
  protected $table = 'verificacao';

  protected $fillable = array(
    'nome', 
    'descricao', 
    'imagem',
    'categoria', 
    'usuario', 
    'mediapag', 
    'numedicoes', 
    'isbn',
    'autor', 
    'editora',
    'id_colecao'
  );

  protected $guarded = ['id'];

  public $timestamps = false;
}
