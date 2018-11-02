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
          $table->increments('id')->primary('id');
          $table->unsignedInteger('usuario_id');
          $table->unsignedInteger('colecao_id');
          $table->foreign('usuario_id')->references('id')->on('users')->onDelete('cascade');
          $table->foreign('colecao_id')->references('id')->on('colecao')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('usuario_colecaos');
    }
}
