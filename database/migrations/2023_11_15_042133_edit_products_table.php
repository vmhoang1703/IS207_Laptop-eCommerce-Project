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
        Schema::table('products', function (Blueprint $table) {
            // $table->integer('favorite_count')->nullable()->default(null)->after('category_id');
            // $table->dropColumn('favorite_count');
            // $table->unsignedInteger('total_favorite_count')->default(0)->after('category_id');
            $table->dropColumn('image');
            $table->dropColumn('image_url');
            $table->dropColumn('video');
            $table->dropColumn('video_url');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
