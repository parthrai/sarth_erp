<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Attendances extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendances', function (Blueprint $table) {
           // $table->integer('roll_no')->references('roll_no')->on('Record');
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->string('course_id');
           // $table->date('date')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('status');
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
        Schema::dropIfExists('Attendance');
    }
}
