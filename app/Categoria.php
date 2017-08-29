<?php

namespace toc;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
  protected $table = 'categoria';

  protected $fillable = array('categoria');

  protected $guarded = ['id'];

  public $timestamps = false;
}
