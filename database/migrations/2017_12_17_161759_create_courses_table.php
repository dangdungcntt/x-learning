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
            $table->integer('vote');
            $table->integer('vote_count');
            $table->string('image');
            $table->timestamps();
        });

        Schema::table('courses', function(Blueprint $table) {
            $table->foreign('type')
                ->references('id')->on('course_types')
                ->onDelete('set null')
                ->onUpdate('cascade');
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
