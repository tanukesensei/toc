<?php

namespace toc;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{ 
  use Searchable;

  protected $table = 'categoria';

  protected $fillable = array('categoria');

  protected $guarded = ['id'];

  public $timestamps = false;
}
