<?php

namespace toc;

use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    protected $table = 'autor';

    protected $fillable = array('nome');

    protected $guarded = ['id'];

    public $timestamps = false;
}
