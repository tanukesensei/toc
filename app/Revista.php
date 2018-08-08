<?php

namespace toc;

use Illuminate\Database\Eloquent\Model;

class Revista extends Model
{
  protected $table = 'revistas';

  protected $fillable = array('titulo', 'descricao', 'numeroedicao', 'colecao', 'autor', 'editora_id');

  protected $guarded = ['id'];

  public $timestamps = false;
}
