<?php

namespace App\Http\Controllers;

use App\Course;
use App\Enrollment;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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


    public function show(Course $course){

            $course->load(['enrollments']);


            $students = User::where('type','student')->get();

        return view('admin.showCourse')->with(['course'=>$course,'students'=>$students]);
    }


    public function enroll(Request $request){

        $check = Enrollment::where('student_id',$request->student_id)->where('course_id',$request->course_id)->count();

        if($check > 0 ){
            return redirect()->back()->with(['msg'=>'Student already enrolled']);

        }

        $enroll = new Enrollment();

            $enroll->student_id = $request->student_id;
            $enroll->course_id = $request->course_id;

        $enroll->save();

        return redirect()->back()->with(['msg'=>'Student successfully enrolled']);


    }

    public function update(){


    }

    public function delete(){

    }
}
