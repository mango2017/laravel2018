<?php

namespace App\Http\Controllers;
use App\Goods;
use App\Users;

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


    //---------------使用自定义函数--------------
    public function love(){
        love();
    }

    public function model(){
        //新增
//        $goods = new Goods();
//        $goods->title = "aaa";
//        $goods->content="bbb";
//        $goods->created_at = date('Y-m-d H:i:s');
//        $goods->updated_at = date('Y-m-d H:i:s');
//        $goods->save();
        //读取
//        $data = Goods::find(2);
//        var_dump($data);


        //删除
//        $info = Goods::find(4);
//        $info->delete();


        //更新
//        $info = Goods::find(2);
//        $info->title = "bbddd";
//        $info->content="fdddd";
//        $info->save();


        //查询出所有结果
//        $data = Goods::get();
//        dd($data);


        //模型是一对多的关系，进行查询语句
        //不用建立主键外键，通过模型来建立主外键即可
        $data = Users::find(1)->post;
        dd($data);

    }
}


