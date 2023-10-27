<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('username')->unique();
            $table->string('password');
            $table->string('email')->unique();
            $table->string('phone')->nullable()->default(null);
            $table->string('ident')->nullable()->default(null);
            $table->string('avatarLink')->nullable()->default(null);
            $table->string('role')->nullable()->default(null);
            $table->string('knownFrom')->nullable()->default(null);
            $table->string('momoWallet_id')->nullable()->default(null);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
