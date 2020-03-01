<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //

    public function fees(){

        return $this->hasMany(Fee::class);

    }
}
