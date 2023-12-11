<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->string('user_id', 6)->primary(); 
            $table->string('name');
            $table->string('password');
            $table->string('email')->unique();
            $table->string('phone')->nullable()->default(null);
            $table->string('role')->nullable()->default('customer');
            $table->string('knownFrom')->nullable()->default(null);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
