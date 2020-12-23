<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultantsGalleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultants_galleries', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->bigInteger('user_id');
            $table->string('gallery_title')->nullable();
            $table->string('slug')->nullable();
            $table->integer('price');
            $table->longText('sub_categories')->nullable();
            $table->bigInteger('category')->nullable();
            $table->longText('description')->nullable();
            $table->bigInteger('no_of_engagement');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->dateTime('deleted_at')->nullable();
            $table->longText('title');
            $table->longText('cover_photo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('consultants_galleries');
    }
}
