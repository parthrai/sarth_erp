<?php

namespace App\Http\Controllers;

use App\Fee;
use App\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    //

    public function tasks(){

        $tasks = Task::with(['course'])->where('user_id',Auth::user()->id)->get();

        return view('users.tasks')->with(['tasks'=>$tasks]);
    }


    public function fees(){

        $fees = Fee::with(['course'])->where('student_id',Auth::user()->id)->get();

        return view('users.fees')->with(['fees'=>$fees]);
    }

}
