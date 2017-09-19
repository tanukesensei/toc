<?php

namespace toc;

use Illuminate\Database\Eloquent\Model;

class Manga extends Model
{
    protected $table = 'mangas';

  protected $fillable = array('titulo', 'descricao', 'numeropag', 'numeroedicao',
   'isbn', 'colecao', 'autor', 'editora_id');

  protected $guarded = ['id'];

  public $timestamps = false;
}
