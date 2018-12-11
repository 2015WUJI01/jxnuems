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

    /**
     * 显示个人信息界面
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function profile()
    {
        switch (Auth::user()->user_type)
        {
//            case 'college': return view('college.welcome');
            case 'student': return StudentController::profile();
//            case 'teacher': return view('teacher.welcome');
//            default: return view('');
        }
    }
    public function profileEdit()
    {
        switch (Auth::user()->user_type)
        {
//            case 'college': return view('college.welcome');
            case 'student': return StudentController::profileEdit();
//            case 'teacher': return view('teacher.welcome');
//            default: return view('');
        }
    }
    public function profileUpdate(Request $request)
    {
        switch (Auth::user()->user_type)
        {
//            case 'college': return view('college.welcome');
            case 'student': return StudentController::profileUpdate($request);
//            case 'teacher': return view('teacher.welcome');
//            default: return view('');
        }
    }

    /**
     * 显示账号信息界面
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function account()
    {
        switch (Auth::user()->user_type)
        {
//            case 'college': return view('college.account_info');
            case 'student': return view('student.account_info');
//            case 'teacher': return view('teacher.account_info');
//            default: return view('');
        }
    }
}
