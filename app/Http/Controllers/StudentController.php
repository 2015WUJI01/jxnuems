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
            ->where('users.account', '=', Auth::user()->account)
            ->select(
                'users.user_type_id',
                'students.Number as number',
                'students.Name as name',
                'students.Email as email',
                'students.Gender as gender',
                'students.Tel as tel'
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
            ->where('users.account', '=', Auth::user()->account)
            ->select(
                'users.user_type_id',
                'students.Number as number',
                'students.Name as name',
                'students.Email as email',
                'students.Gender as gender',
                'students.Tel as tel'
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