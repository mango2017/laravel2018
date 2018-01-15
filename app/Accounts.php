<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
class Accounts extends Model{
    
    protected  $table = "accounts";
    
    
    public function student(){
//        return $this->belongsTo('App\Student');
    }
   
        

}

