<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrossTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cross_table', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_dictionary')->nullable();
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
        Schema::dropIfExists('cross_table');
    }
}
