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
        Schema::create('tags', function (Blueprint $table) {
            $table->string('tag_id', 6)->primary();
            $table->string('product_id');
            $table->string('title');
            $table->string('meta_title');
            $table->string('slug');
            $table->text('content');
            $table->timestamps();

            $table->foreign('product_id')->references('product_id')->on('products'); 

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tags');
    }
};
