<?php

namespace toc;

use Illuminate\Database\Eloquent\Model;

class Artigo extends Model
{
  protected $table = 'artigos';

  protected $fillable = array('titulo', 'revista');

  protected $guarded = ['id'];

  public $timestamps = false;
}
