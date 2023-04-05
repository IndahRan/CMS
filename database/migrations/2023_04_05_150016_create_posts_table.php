<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();

            $table->foreignId('category_id');
            $table->foreign('category_id')->references('id')->on('categories'); 

            // $table->foreignId('gallery_id');
            // $table->foreign('gallery_id')->references('id')->on('galleries'); 

            $table->string('title');
            $table->longText('description');
            $table->boolean('is_publish')->default(false); //0 untuk belum dan 1 untuk udah ke publish
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
