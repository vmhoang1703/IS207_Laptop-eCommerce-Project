p<?php

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
            $table->date('date_of_birth')->nullable()->default(null);
            $table->string('address')->nullable()->default(null);
            $table->string('department')->nullable()->default(null);
            $table->string('position')->nullable()->default(null);
            $table->decimal('salary', 10, 2)->nullable()->default(null);
            $table->date('hire_date')->nullable()->default(null);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
