<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fee extends Model
{
    //

    protected $table='fee_details';


   public function student(){
        return $this->belongsTo(User::class,'student_id');
   }


   public function course(){
       return $this->belongsTo(Course::class,'course_id');
   }


}
