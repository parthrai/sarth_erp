<?php

namespace App\Http\Controllers;

use App\Course;
use App\Fee;
use App\User;
use Illuminate\Http\Request;

class FeesController extends Controller
{
    //

    public function index(){

        $fees = Fee::with(['student','course'])->get();

        $students = User::where('type','student')->get();
        $courses = Course::all();

        return view('admin.Fees')->with(['fees'=>$fees,'students'=>$students,'courses'=>$courses]);
    }

    public function store(Request $request){

        $course = Course::find($request->course_id);

        $fee = new Fee();

            $fee->student_id = $request->student_id;
            $fee->course_id = $request->course_id;
            $fee->amount_paid = $request->amount_paid;
            $fee->amount_due = $course->fees - $request->amount_paid;


        $fee->save();


        return redirect()->back()->with(['msg'=>'fee added!']);


    }


    public function delete(Fee $fee){

       $fee->delete();


        return redirect()->back()->with(['msg'=>'deleted']);

    }
}
