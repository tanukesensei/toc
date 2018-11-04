<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsuarioColecaos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_colecaos', function (Blueprint $table) {
          $table->increments('id');
          $table->unsignedInteger('id_usuario');
          $table->unsignedInteger('id_colecao');
          $table->foreign('id_usuario')->references('id')->on('users')->onDelete('cascade');
          $table->foreign('id_colecao')->references('id')->on('colecao')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario_colecaos');
    }
}
