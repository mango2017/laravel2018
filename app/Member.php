<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    //指定表名
    protected $table="t1";
    
    //指定id
    protected $primaryKey = 'id';
  
    //指定允许批量赋值的字段
    protected $fillable = ['name','count'];
  
    //不允许批量赋值的字段
    protected  $guarded = [];


    //自动维护时间戳
    public $timestamps = true;
    
    protected function getDateFormat() {
        return time();
    }

    protected function asDateTime($value) {
        return $value;
    }

//    public static function getMember(){
//        return "info";
//    }
    
}
