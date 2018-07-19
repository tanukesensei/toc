<?php

namespace toc;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Editora extends Model
{
  use Searchable;

  protected $table = 'editora';

  protected $fillable = array('nome');

  protected $guarded = ['id'];

  public $timestamps = false;
}
