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
            $table->string('product_id', 6)->primary();
            $table->string('user_id'); //Liên kết với nhân viên đăng sản phẩm
            $table->string('title');
            $table->string('meta_title');
            $table->string('slug');
            $table->text('description');
            $table->decimal('price', 10, 2);
            $table->integer('discount')->nullable()->default(0);
            $table->integer('quantity');
            $table->string('status');
            $table->string('category_id');
            $table->unsignedInteger('total_favorites')->default(0);
            $table->string('brand');
            $table->string('screen_size');
            $table->string('CPU');
            $table->string('RAM');
            $table->string('storage');
            $table->string('event');
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
