<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideoChatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('video_chats', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('client');
            $table->integer('consultant');
            $table->integer('status');
            $table->integer('started_at');
            $table->integer('ended_at');
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('video_chats');
    }
}
