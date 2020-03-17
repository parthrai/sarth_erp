<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    //

    protected $table = 'enrollments';

    protected $with = ['student','course'];

    public function course(){
        return $this->belongsTo(Course::class,'course_id');
    }


    public function student(){
        return $this->belongsTo(User::class,'student_id');
    }
}
