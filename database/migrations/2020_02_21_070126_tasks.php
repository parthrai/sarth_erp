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
            //$table->string('Subject_Name')->references('Subject_Name')->on('Attendance');
            $table->integer('course_id');
           // $table->date('Date')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string("homework");
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
