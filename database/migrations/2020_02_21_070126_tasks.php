<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tasks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
           // $table->integer('roll_no')->references('roll_no')->on('Record');
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->string('user_name');
            $table->integer('course_name');
            $table->string("task");
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
        Schema::dropIfExists('Task_details');
    }
}
