<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 300);
            $table->string('login', 300)->unique();
            $table->string('email', 300)->unique();
            $table->string('password');
            $table->smallInteger('age')->nullable();
            $table->text('description')->nullable();
            $table->integer('level')->nullable();
            $table->string('status')->default('student');
            $table->integer('teacher')->nullable();
            $table->rememberToken()->nullable();
            $table->timestamps();;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
