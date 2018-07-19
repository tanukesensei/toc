<?php

namespace toc;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Revista extends Model
{
  use Searchable;

  protected $table = 'revistas';

  protected $fillable = array('titulo', 'descricao', 'numeroedicao', 'colecao', 'autor', 'editora_id');

  protected $guarded = ['id'];

  public $timestamps = false;
}
