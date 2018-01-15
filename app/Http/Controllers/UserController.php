<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class UserController extends  Controller{

    public function qingqiu(Request $request){
        //-----------------请求的方法获取GET------------------
//        $method = $request->method();
//        echo $method;


        //-------------------检测请求方法TRUE---------------------
//        $res = $request->isMethod('GET');
//        var_dump($res);



        //----------------------请求路径request---------------------
//        $path = $request->path();
//        echo $path;


        //-------------请求完整路径http://localhost/laravel/public/index.php/request------------
//        $url = $request->url();
//        echo $url;


        //-------------获取请求ip::1-----------
//        $ip = $request->ip();
//        echo ($ip);

         //--------------获取端口80-------------
//        $port = $request->getPort();
//        echo $port;

         //http://localhost/laravel/public/index.php/request?name=100
        //--------------参数获取100--------------
//        $username = $request->input('name');
//        echo $username;



        //---------------获取请求参数-------------
//        $username = $request->input('username');
//        $password = $request->input('password');
//        echo $username;
//        echo $password;


        //--------------设置默认值---------
//        $res = $request->input('name',100);
//        echo $res;



        //------------检测请求参数------------
//        $res = $request->has('username');
//        var_dump($res);



        //------------获取所有的请求参数------------
//        $res = $request->all();
//        var_dump($res);


        //----------获取部分参数-------------
//        $res = $request->only(['username','password']);
//        var_dump($res);


        //----------------剔除不需要的参数-----------

//        $res = $request->except(['username','password']);
//        var_dump($res);



        //--------------获取请求的头信息-------------
//        $res = $request->header('connection');
//        var_dump($res);



    }


    public function index(){
        return view('control.index');
    }



    //-------------------文件上传-------------
    public function show(){
        return view('control.show');
    }


    //处理文件上传
    public function upload(Request $request){
//        var_dump($_FILES);

        //检测文件是否有上传
        if($request->hasFile('file')){
            $request->file('file')->move('./uploads','jly.jpg');
        }
    }


    //-------------设置cookie----------
    public function cookie1(){
        //return response("欢迎光临")->cookie('name','学院',1);
        \Cookie::queue('username',123,2);
    }

    //--------------获取cookie----------
    public function getCookie(Request $request){
//        echo \Cookie::get('username');
        echo $request->cookie('username');
    }






}


