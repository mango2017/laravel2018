<?php

namespace App\Http\Controllers;


class DemoController extends  Controller{


    public function index(){
        return view('demo.index');
    }

    //--------------------模板继承------------
    public function layout(){
        return view('layout.index');
    }


    public function extend(){
        return view('layout.extend');
    }

    //-----------------流程控制语句--------------
    public function liucheng(){
        return view('control.liucheng',['total'=>200,'sex'=>0]);
    }


    //--------------循环控制---------------------
    public function xunhuan(){
        return view('control.xunhuan',['users'=>['username'=>'jly','age'=>27]]);
    }
}


