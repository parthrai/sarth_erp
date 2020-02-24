<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    //

    public function listUsers(){

        $users= User::all();

        return view('admin.listUsers')->with(['users' => $users]);
    }

    public function addUser(Request $request){

        $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->type = $request->type;
            $user->password = Hash::make('pass123');
        $user->save();

        return redirect()->back()->with(['msg' => 'user added ']);
    }
}
