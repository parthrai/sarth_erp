<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Records extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->string('user_name');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('email')->unique();
            $table->string('mob')->unique();
            $table->string('dob');
            $table->string('age');
            $table->string('gender');
            $table->string('address');
            $table->string('city');
            $table->string('zip_code');
            $table->string('state');
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
        Schema::dropIfExists('Record');
    }
}
