<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Livros extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('livros', function (Blueprint $table) {
        $table->increments('id');
        $table->string('titulo', 50)->nullable();
        $table->text('descricao')->nullable();
        $table->integer('numeropag')->nullable();
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
        Schema::dropIfExists('livros');
    }
}
