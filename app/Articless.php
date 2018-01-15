<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;
class Articless extends Model{
    //关联模型
    public function student(){
        return $this->belongsTo('App\Student');
    }
        
    
}

