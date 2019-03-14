<?php

namespace toc;

use Illuminate\Database\Eloquent\Model;

class Mensagem extends Model
{
    protected $table = 'mensagens';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = array('id_usuario', 'id_destinatario', 'mensagens',
     'created_at');

    protected $guarded = ['id'];

    public $timestamps = false;
}
