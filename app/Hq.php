<?php

namespace toc;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Hq extends Model
{
  use Searchable;

  protected $table = 'hqs';

  protected $fillable = array('titulo', 'descricao', 'colecao',
   'numeroedicao', 'autor', 'editora_id');

  protected $guarded = ['id'];

  public $timestamps = false;
}
