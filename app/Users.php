<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    //模型一对多的关系

    public function post(){
        return $this->hasMany('App\Post','user_id');
    }
}
