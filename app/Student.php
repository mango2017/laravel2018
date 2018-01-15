<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
class Student extends Model{
    const SEX_UN = 10;//未知
    const SEX_BOY = 20;//男
    const SEX_GIRL = 30;//女
//    public $sex;
//    public $age;
//    public $name;
    protected  $table = "student";
    public $timestamps = true;
    //指定允许批量赋值的字段
    protected $fillable = ['name','age','sex'];
    protected function getDateFormat() {
        return time();
    }
    
    protected function asDateTime($value) {
       return $value;
    }
    
    public function sex($ind = null){
        $arr = [
            self::SEX_UN => "未知",
            self::SEX_BOY  =>'男',
            self::SEX_GIRL =>"女"
        ];
        if($ind !==null){
            return array_key_exists($ind, $arr)?$arr[$ind]:$arr[self::SEX_UN];
        }
        return $arr;
        
    }
    
    
     //关联模型
    public  function accounts(){
        //关联accounts表
        return $this->hasOne('App\Accounts','student_id','id');
    }
    
        

}

