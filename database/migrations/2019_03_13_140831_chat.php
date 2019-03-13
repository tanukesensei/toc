<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Chat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('chat', function (Blueprint $table) {
      $table->increments('id');
      $table->string('from', 250);
      $table->string('to', 250);
      $table->text('menssage');
      $table->dateTime('created_at');
      $table->unsignedInteger('recd');
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chat');
    }
}
