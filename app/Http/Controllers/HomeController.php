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
        switch (Auth::user()->user_type_id)
        {
            case 1:
//                return view('college.home');
            case 2:
                return view('student.home');
            case 3:
//                return view('teacher.home');
            default:
                return view('auth.passwords.reset');
        }
    }

}
