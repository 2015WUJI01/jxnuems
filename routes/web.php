<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get('user/{user?}',function($user = 'billdex'){
//    return 'user-name:'.$user;
//});
//Route::get('view', function () {
//    return view('welcome');
//});
//
////Route::get('member/info', 'MemberController@info');
//
//Route::get('member/{id}', ['uses' => 'MemberController@info',
//    'as' =>'memberinfo'
//]);
//
//Route::any('test1', ['uses' => 'StudentController@test1']);
//Route::any('section1', ['uses' => 'StudentController@section1']);
//Route::any('url', ['as' => 'url','uses' => 'StudentController@urlTest']);
//Route::any('request1', ['uses' => 'StudentController@request1']);


Route::group(['middleware'=>['web']], function(){

    Route::get('student/index',['uses'=>'StudentController@index'])->name('index.student');
    Route::any('student/create',['uses'=>'StudentController@create'])->name('create.student');
    Route::any('student/save
    ',['uses'=>'StudentController@save'])->name('save.student');
});