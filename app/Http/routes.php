<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */


//路由功能


//-----------sql打印----------
//Event::listen('illuminate.query',function($query){
//    var_dump($query);
//});



http://localhost:90/blogabcs/public/
Route::get('/', function () {
    return view('welcome');
});

//http://localhost:90/blogabcs/public/basic1
//Route::get('basic1',function(){
//    return "hejiong";
//});
//控制器和路由关联
//Route::get('member/info/{id}','MemberController@info');
//Route::get('member/canshu','MemberController@canshu');
//Route::group(['middleware' => ['web']], function() {
//    Route::get('session1', 'MemberController@session1');
//    Route::get('session2', ['as' => 'session2', 'uses' => 'MemberController@session2']);
//});
//Route::get('response', 'MemberController@response');
//
////活动页面
//Route::group(['middleware' => ['activity']], function() {
//    Route::any('activity1', ['uses' => 'MemberController@activity1']);
//    Route::any('activity2', ['uses' => 'MemberController@activity2']);
//});

//宣传页面
//Route::any('activity0', ['uses' => 'MemberController@activity0']);




//Route::get('member/info',['uses'=>'MemberController@info']);
//Route::get('member/info',[
//    'uses'=>'MemberController@info',
//    'as'=>'memberinfo'
// ]);

//Route::any('member/{id}',['uses'=>'MemberController@info'])->where('id','[0-9]+');
//Route::any('test',['uses'=>'MemberController@test']);
//Route::any('demo',['uses'=>'MemberController@demo']);
//
//Route::post('basic2',function(){
//    return "basic2";
//});
//
//
//Route::match(['get','post'],'multy1',function(){
//    return "multy1";
//});
//
//
//Route::any('multy2',function(){
//    return "multy2";
//});

//Route::get('multy2','MemberController@test')->name('web.user');
//
//Route::get('multy',['as'=>'academy',function(){
////    return route('web.user');
//    return redirect()->route('web.user');
//}]);

Route::get('student/index',['uses'=>'StudentController@index']);
Route::any('student/create',['uses'=>'StudentController@create']);
Route::any('student/saves',['uses'=>'StudentController@saves']);
Route::any('student/update/{id}',['uses'=>'StudentController@update']);
Route::any('student/detail/{id}',['uses'=>'StudentController@detail']);
Route::any('student/delete/{id}',['uses'=>'StudentController@delete']);


//测试辅助函数
//http://localhost/laravel/public/index.php/student/test1
//head函数只是简单返回给定数组的第一个元素
Route::get('student/head',function(){
    $array = ["a"=>100, "b"=>200, "c"=>300];
    $first = head($array);
    echo $first;
});

//array_add函数添加给定键值对到数组，如果给定键不存在的话
Route::get('student/array_add',function(){
    $data = ['name' => 'Desk'];
    $array = array_add($data,'price', 100);
    var_dump($array);
});


//array_except方法从数组中移除给定键值对
Route::get('student/array_except',function(){
    $array = ['name' => 'Desk', 'price' => 100];
    $array1 = array_except($array, ['price']);
    var_dump($array1);
    echo  "---------";
    var_dump($array);
});

//文件上传
Route::any('upload', 'StudentController@upload');

//缓存
Route::get('cache1', 'StudentController@cache1');

Route::get('cache2', 'StudentController@cache2');

//队列
Route::any('queue', 'StudentController@queue');

//发送邮件
Route::any('mail', 'StudentController@mail');
//错误日志
Route::get('error','StudentController@error');

//测试关联模型
Route::get('moxing', 'StudentController@moxing');

Route::auth();

Route::get('/home', 'HomeController@index');


//-----------------demo控制器-------------------
Route::any('demo','DemoController@index');


Route::any('layout','DemoController@layout');
//模板继承
Route::any('extend','DemoController@extend');
//流程控制
Route::get('liucheng','DemoController@liucheng');
//循环控制
Route::get('xunhuan','DemoController@xunhuan');



//---------------------------请求---------------------
Route::any('request','UserController@qingqiu');

Route::get('form','UserController@index');




//--------------------文件上传-------------
Route::get('show','UserController@show');

Route::post('upload','UserController@upload');




//---------------cookie----------------
Route::get('cookie1','UserController@cookie1');
Route::get('cookie2','UserController@getCookie');




//---------------Teacher类使用路由中间件---------------
Route::get('teacher/index','TeacherController@index');
//Route::get('teacher/index',['middleware'=>'teacher','uses'=>'TeacherController@index']);

//---------------隐式控制器，如果是goods开头的路径，都是交给GoodsController来实现
Route::controller('goods','GoodsController');





//------------------路由404-----------
Route::get('404',function(){
   abort(404);
});


