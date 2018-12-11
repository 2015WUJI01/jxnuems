<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function profile()
    {
        switch (Auth::user()->user_type_id)
        {
            case 1:
//                return view('college.welcome');
            case 2:
                return view('student.profile');
            case 3:
//                return view('teacher.welcome');
            default:
//                return view('');
        }
    }
    public function account()
    {
        switch (Auth::user()->user_type_id)
        {
            case 1:
//                return view('college.account_info');
            case 2:
                return view('student.account_info');
            case 3:
//                return view('teacher.account_info');
            default:
//                return view('');
        }
    }
}
