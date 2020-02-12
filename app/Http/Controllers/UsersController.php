<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function registmail(){
        return view('registmail');
    }

    public function regist(Request $request){
        $mail = $request->email;
        return view('regist', compact('mail'));
    }
}
