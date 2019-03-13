<?php

namespace toc;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
  protected $table = 'chat';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = array('from', 'to', 'message',
   'created_at', 'recd');

  protected $guarded = ['id'];

  public $timestamps = false;
}
