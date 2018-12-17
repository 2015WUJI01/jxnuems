<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/11 0011
 * Time: 上午 10:47
 */
namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model{
    protected $table = 'student';
    protected $fillable = ['name', 'age', 'sex'];
    public $timestamps = true;
    protected function getDateFormat(){
        return time();
    }
    protected function asDateTime($val){
        return $val;
    }
}