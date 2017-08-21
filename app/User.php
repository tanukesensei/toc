<?php

namespace toc;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';

    protected $fillable = array('nome', 'genero', 'datanascimento',
     'cidade', 'estado', 'email', 'username', 'senha');

    protected $guarded = ['id'];

    public $timestamps = false;
}
