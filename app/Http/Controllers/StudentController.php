<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
class StudentController extends Controller{
//    public function test1()
//    {
////        $students = DB::select('select* from stedent');
////        var_dump($students);
////        return 'test1';
//        $bool = DB::insert('insert into student(name, age) values(?,?)',
//        ['yy',18]);
//        var_dump($bool);
//    }
//    public function section1(){
//        $name = 'xx';
//        return view('student.section1',[
//            'name' => $name
//        ]);
//    }
//    public function urlTest(){
//        return 'urltest';
//    }
//    public function request1(Request $request){
//        //取值
//        echo $request->input('name');
//        echo '<br>';
//        echo $request->input('sex', 'unknown');
//    }
    public function index(){
        $students = Student::get();
        return view('student.index',[
            '$students' => $students,
        ]);
//        return view('student.index');
    }

}