<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }


    public function course(){
        return $this->belongsTo(Course::class,'courser_id');
    }
}
