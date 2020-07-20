<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LessonPlan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lesson_plan', function (Blueprint $table) {
            $table->increments('id');
            $table->text('warm_up')->nullable();
            $table->text('review')->nullable();
            $table->text('presentation')->nullable();
            $table->text('practice')->nullable();
            $table->text('production')->nullable();
            $table->text('extra_activities')->nullable();
            $table->text('sum_up')->nullable();
            $table->string('warm_up_time')->nullable();
            $table->string('review_time')->nullable();
            $table->string('presentation_time')->nullable();
            $table->string('extra_activities_time')->nullable();
            $table->string('sum_up_time')->nullable();
            $table->string('sum_up_note')->nullable();
            $table->string('notice')->nullable();
            $table->text('feedback')->nullable();
            $table->text('feedback_note')->nullable();
            $table->integer('id_user');
            $table->integer('id_date');
            $table->text('warm_up_note')->nullable();
            $table->text('review_note')->nullable();
            $table->text('presentation_note')->nullable();
            $table->text('practice_note')->nullable();
            $table->text('production_note')->nullable();
            $table->text('extra_activities_note')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lesson_plan');
    }
}
