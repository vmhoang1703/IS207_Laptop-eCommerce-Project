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
        Schema::create('blogs', function (Blueprint $table) {
            $table->string('blog_id', 6)->primary();
            $table->string('user_id'); //Liên kết với nhân viên đăng Blog
            $table->string('category_id');
            $table->string('title');
            $table->string('meta_title');
            $table->text('summary');
            $table->string('slug');
            $table->text('content');
            $table->string('featured_post');
            $table->timestamps();

            $table->foreign('category_id')->references('category_id')->on('categories');
            $table->foreign('user_id')->references('user_id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
};
