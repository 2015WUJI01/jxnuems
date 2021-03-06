<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public static function profile()
    {
        $user = DB::table('users')
            ->join('students', 'users.account', 'students.Number')
            ->join('colleges', 'colleges.Id', 'students.College_id')
            ->where('users.account', '=', Auth::user()->account)
            ->select(
                'users.user_type',
                'students.Number as number',
                'students.Name as name',
                'students.Name as college',
                'students.Email as email',
                'students.Gender as gender',
                'students.Tel as tel',
                'colleges.Name as college'
                )
            ->first();
        if (!$user) {
            dd($user);
        }
        return view('student.profile_info', [
            'user' => $user,
        ]);
    }

    public static function profileEdit()
    {
        $user = DB::table('users')
            ->join('students', 'users.account', 'students.Number')
            ->join('colleges', 'colleges.Id', 'students.College_id')
            ->where('users.account', '=', Auth::user()->account)
            ->select(
                'users.user_type',
                'students.Number as number',
                'students.Name as name',
                'students.Email as email',
                'students.Gender as gender',
                'students.Tel as tel',
                'colleges.Name as college'
            )
            ->first();
        if (!$user) {
            dd($user);
        }
        return view('student.profile_edit', [
            'user' => $user,
        ]);
    }

    public static function profileUpdate(Request $request)
    {

    }
}