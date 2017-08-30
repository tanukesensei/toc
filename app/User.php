<?php

namespace toc;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';

    protected $fillable = array('name', 'genero', 'datanascimento',
     'cidade', 'estado', 'email', 'username', 'password');

    protected $guarded = ['id'];

    public $timestamps = false;
}
