<?php

namespace toc;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
  use Searchable;

  protected $table = 'livros';

  protected $fillable = array('titulo', 'sinopse', 'numeropag',
   'isbn', 'colecao', 'autor', 'editora_id');

  protected $guarded = ['id'];

  public $timestamps = false;
}
