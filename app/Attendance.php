<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    //

    public function student(){

        return $this->belongsTo(User::class);
    }

    public function course_to_join(){

        return $this->belongsTo(Course::class);
    }
}
