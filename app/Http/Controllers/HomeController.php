<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('welcome');

    }

    public function home()
    {
        switch (Auth::user()->user_type)
        {
            case 'college':
//                return view('college.home');
            case 'student':
                return view('student.home');
            case 'teacher':
//                return view('teacher.home');
            default:
                return view('auth.passwords.reset');
        }
    }

}
