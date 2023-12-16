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
        Schema::create('orders', function (Blueprint $table) {
            $table->string('order_id', 6)->primary();
            $table->string('product_id');
            $table->string('user_id');
            $table->string('cartItem_id');
            $table->string('transaction_id');
            $table->integer('quantity')->default(1);
            $table->string('status');
            $table->string('payment_status');
            $table->decimal('subtotal', 10, 2);
            $table->decimal('shipping', 10, 2);
            $table->decimal('total', 10, 2);
            $table->string('promo')->nullable();
            $table->decimal('discount', 10, 2);
            $table->string('fullname');
            $table->string('phone');
            $table->string('email');
            $table->text('street_address');
            $table->text('number_address');
            $table->string('city');
            $table->string('province');
            $table->text('note')->nullable();
            $table->string('payment_method')->nullable();
            $table->timestamps();

            $table->foreign('product_id')->references('product_id')->on('products');
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
        Schema::dropIfExists('orders');
    }
};
