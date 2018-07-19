<?php

namespace toc;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Manga extends Model
{
  use Searchable;

  protected $table = 'mangas';

  protected $fillable = array('titulo', 'descricao', 'numeropag', 'numeroedicao',
   'isbn', 'colecao', 'autor', 'editora_id');

  protected $guarded = ['id'];

  public $timestamps = false;
}
