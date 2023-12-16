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
        Schema::create('transactions', function (Blueprint $table) {
            $table->string('transaction_id', 6)->primary();
            $table->string('code');
            $table->string('user_id');
            $table->string('order_id');
            $table->string('status');
            $table->string('mode');
            $table->text('content');
            $table->timestamps();

            $table->foreign('user_id')->references('user_id')->on('users'); 
            $table->foreign('order_id')->references('order_id')->on('orders'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
};
