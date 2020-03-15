<?php

namespace App\Http\Controllers;

use App\Course;
use App\Fee;
use App\Task;
use App\User;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //
    public function index(){

        $tasks = Task::with(['student','course'])->get();

        $students = User::where('type','student')->get();
        $courses = Course::all();

        return view('admin.listTask')->with(['tasks'=>$tasks,'students'=>$students,'courses'=>$courses]);
    }


    public function store(Request $request){

        $users = User::find($request->id);
        $course = Course::find($request->course_id);

        $task = new Task();
        $task->user_id = $request->user_id;
        $task->user_name = $request->user->name;
        $task->course_name = $request->course_name;
        $task->homework = $request->homework;

        $task->save();

        return redirect()->back()->with(['msg'=>'Task successfully added']);
    }
}
