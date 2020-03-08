<?php

namespace App\Http\Controllers;

use App\Course;
use App\Fee;
use App\Student;
use App\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //

    public function index(){

        $students = Student::all();

        return view('admin.listStudent')->with(['students'=>$students]);
    }

    public function store(Request $request){

        $student = new Student();

        $student->user_id = $request->user_id;
        $student->user_name = $request->user_name;
        $student->father_name = $request->father_name;
        $student->mother_name = $request->mother_name;
        $student->email = $request->email;
        $student->mob = $request->mob;
        $student->dob = $request->dob;
        $student->age = $request->age;
        $student->gender = $request->gender;
        $student->address = $request->address;
        $student->city = $request->city;
        $student->zip_code = $request->zip_code;
        $student->state = $request->state;


        $student->save();


        return redirect()->back()->with(['msg'=>'Student added!']);


    }
}
