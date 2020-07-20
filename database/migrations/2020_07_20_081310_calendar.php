<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Calendar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calendar', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date_any');
            $table->integer('id_teacher')->nullable();
            $table->integer('id_user')->nullable();
            $table->integer('id_topic')->nullable();
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
        Schema::dropIfExists('calendar');
    }
}
