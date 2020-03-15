<?php

namespace App\Http\Controllers;

use App\Course;
use App\User;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    //

    public function index(){

        $courses = Course::all();

        return view('admin.listAttendance')->with(['courses' => $courses]);

    }

    public function detail(){

        $users = User::all();

        return view('admin.listAttendancedetails')->with(['users' => $users]);

    }

}
