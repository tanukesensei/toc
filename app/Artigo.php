<?php

namespace toc;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Artigo extends Model
{
  use Searchable;

  protected $table = 'artigos';

  protected $fillable = array('titulo', 'revista');

  protected $guarded = ['id'];

  public $timestamps = false;
}
