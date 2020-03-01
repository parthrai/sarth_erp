<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    //

    public function index(){

        $courses = Course::all();

        return view('admin.listCourses')->with(['courses' => $courses]);

    }


    public function store(Request $request){

        $course = new Course();
            $course->name = $request->name;
            $course->duration = $request->duration;
            $course->fees = $request->fees;

        $course->save();

        return redirect()->back()->with(['msg'=>'course successfully added']);



    }

    public function update(){


    }

    public function delete(){

    }
}
