<?php
namespace App\Http\Controllers;
use App\Student;
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
//        paginate里面表示每页数据量
        $students = Student::paginate(5);
        return view('student.index', [
            'students' => $students,
        ]);
//        return view('student.index');
    }
    public function create(Request $request){

        if($request->isMethod('POST')){
            





            $data = $request->input('Student');
            if(Student::create($data)){
                return redirect('student/index')->with('success','添加成功');
            }
            else{
                return  redirect()->back();
            }

        }



        return view('student.create');
    }
    public function save(Request $request){
//        return view('student.save');
        $data = $request->input('Student');
//        var_dump($data);

        $student = new Student();
        $student->name = $data['name'];
        $student->age = $data['age'];
        $student->sex = $data['sex'];
        if($student->save()){
            return redirect('student/index');
        }
        else{
            return redirect()->back();
        }
    }

}