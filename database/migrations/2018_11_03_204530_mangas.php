<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Mangas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('mangas', function (Blueprint $table) {
        $table->increments('id');
        $table->string('titulo', 50)->nullable();
        $table->string('descricao', 150)->nullable();
        $table->integer('numeropag')->nullable();
        $table->integer('numeroedicao')->nullable();
        $table->string('isbn', 13)->unique()->nullable();
        $table->unsignedInteger('autor');
        $table->unsignedInteger('colecao');
        $table->unsignedInteger('editora_id');
        $table->foreign('autor')->references('id')->on('autor')->onDelete('cascade')->onUpdate('cascade');
        $table->foreign('colecao')->references('id')->on('colecao')->onDelete('cascade')->onUpdate('cascade');
        $table->foreign('editora_id')->references('id')->on('editora')->onDelete('cascade')->onUpdate('cascade');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mangas');
    }
}
