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
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('product_id');
            $table->string('name');
            $table->text('description');
            $table->decimal('price', 10, 2);
            $table->decimal('oldPrice', 10, 2);
            $table->integer('stock_quantity');
            $table->unsignedBigInteger('category_id');
            $table->string('image')->nullable()->default(null);
            $table->string('image_url')->nullable()->default(null);
            $table->string('video')->nullable()->default(null);
            $table->string('video_url')->nullable()->default(null);
            $table->timestamps();

            $table->foreign('category_id')->references('category_id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
