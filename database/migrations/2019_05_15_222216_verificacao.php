<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Verificacao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('verificacao', function (Blueprint $table) {
          $table->increments('id');
          $table->string('nome', 50);
          $table->string('descricao', 150);
          $table->integer('mediapag');
          $table->integer('numedicoes');
          $table->string('autor', 50);
          $table->text('imagem')->nullable();
          $table->integer('isbn')->unique()->nullable();
          $table->unsignedInteger('categoria');
          $table->unsignedInteger('editora');
          $table->unsignedInteger('usuario');
          $table->unsignedInteger('id_colecao');
          $table->foreign('categoria')->references('id')->on('categoria');
          $table->foreign('editora')->references('id')->on('editora');
          $table->foreign('usuario')->references('id')->on('users');
          $table->foreign('id_colecao')->references('id')->on('colecao');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('verificacao');
    }
}
