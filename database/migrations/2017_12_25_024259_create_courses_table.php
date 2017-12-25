<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('detail');
            $table->integer('type')->unsigned()->nullable();
            $table->dateTime('start_at');
            $table->dateTime('end_at');
            $table->integer('vote')->nullable();
            $table->integer('vote_count')->nullable();
            $table->string('image')->nullable();
            $table->integer('teacher_id')->unsigned()->nullable();
            $table->foreign('teacher_id', 'courses_teacher_id_foreign')
              ->references('id')->on('teachers')
              ->onDelete('set null')
              ->onUpdate('cascade');
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
        Schema::dropIfExists('courses');
    }
}
