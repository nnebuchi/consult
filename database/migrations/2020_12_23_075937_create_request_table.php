<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->integer('user_id')->nullable();
            $table->integer('gig_id')->nullable();
            $table->integer('proposed_price')->nullable();
            $table->integer('agreed_price')->nullable();
            $table->integer('status_id')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->dateTime('deleted_at')->nullable();
            $table->string('title')->nullable();
            $table->string('description');
            $table->integer('bid_price')->nullable();
            $table->string('sample_file')->nullable();
            $table->string('slug');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('request');
    }
}
