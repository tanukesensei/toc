<?php

namespace toc;

use Illuminate\Database\Eloquent\Model;

class UsuarioColecao extends Model
{
    protected $tabled  = 'usuario_colecaos';

    protected $fillable = array('id_usuario', 'id_colecao');

    protected $guarded = ['id'];

    public $timestamps = false;
}
