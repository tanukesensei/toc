<?php

namespace toc;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    use Searchable;
    
    protected $table = 'autor';

    protected $fillable = array('nome');

    protected $guarded = ['id'];

    public $timestamps = false;
}
