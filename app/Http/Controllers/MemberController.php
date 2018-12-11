<?php
namespace App\Http\Controllers;

use App\Member;

class MemberController extends  Controller
{
    public function info($id){
//        return Member::getMember();
//        return 'member-info' . $id;
//        return route('memberinfo');
    return view('member-info',[
        'name' => 'luox',
        'wcaid' => '2013luox01'
    ]);
//        return view('info',[
//            'name' => 'luox',
//            'wcaid' => '2013luox01'
//        ]);
    }
}