<?php

namespace toc;

use Illuminate\Database\Eloquent\Model;

class Editora extends Model
{
    protected $table = 'editora';

  protected $fillable = array('nome');

  protected $guarded = ['id'];

  public $timestamps = false;
}
