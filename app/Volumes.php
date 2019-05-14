<?php

namespace toc;

use Illuminate\Database\Eloquent\Model;

class Volumes extends Model
{
  protected $tabled  = 'volumes';

  protected $fillable = array('id_usuario', 'id_colecao', 'titulo_volume', 'descricao', 'imagem');

  protected $guarded = ['id'];

  public $timestamps = false;
}
