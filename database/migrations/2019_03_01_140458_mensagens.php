<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Mensagens extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('mensagens', function (Blueprint $table)) {
          $table->increments('id_conversa');
          $table->unsignedInteger('id_usuario');
          $table->unsignedInteger('id_destinatario');
          $table->string('mensagens', 1000);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
