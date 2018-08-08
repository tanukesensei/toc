<?php

namespace toc;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
  protected $table = 'livros';

  protected $fillable = array('titulo', 'sinopse', 'numeropag',
   'isbn', 'colecao', 'autor', 'editora_id');

  protected $guarded = ['id'];

  public $timestamps = false;
}
