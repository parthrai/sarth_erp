<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Course extends Model
{
    //

    public function fees(){

        return $this->hasMany(Fee::class);

    }

    public function enrollments(){

        return $this->hasMany(Enrollment::class);
    }


    public function fee($student_id){

        if($student_id == null){
            $student_id = Auth::user()->id;
        }

        return Fee::where('student_id',$student_id)->where('course_id',$this->id)->sum('amount_paid');
    }
}
