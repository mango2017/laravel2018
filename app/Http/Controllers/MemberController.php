<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Support\Facades\DB;
//use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Support\Facades\Session;

class MemberController extends Controller {

    public function info($id) {
        echo $id;
//        return $id;exit;
//        return "member-info111";
//        return route('memberinfo');
//        return "helloo";
//        return view('member-info');
//        return view('member/info',['name'=>'天平vs 永恒','age'=>28]);
//        return Member::getMember();
    }

    public function test() {
        echo "hello22dd2";
        //新增
//       $data =  DB::select("select * from t1");
//       var_dump($data);
//       插入
//        $insert = DB::insert("insert into t1(author,count) values(?,?)",['aaa',20]);
//        var_dump($insert);
        //更新
//         $insert = DB::update("update t1 set count=? where id=?",[100,1]);
//        var_dump($insert);
//         $data =  DB::select("select * from t1 where id=?",[1]);
//       dd($data);
        //删除
//        $a = DB::delete('delete from t1 where id>?',[3]);
//        var_dump($a);
    }

    public function demo() {
        return redirect()->route(route('web.user'));
//        $insert = DB::table('t1')->insert([
//                ['author'=>'aaa','count'=>90],
//                ['author'=>'aaa1','count'=>901]
//        ]);
//        var_dump($insert);
//         $insert = DB::table('t1')->insertGetId(
//                ['author'=>'aaa','count'=>90]
//        );
//         var_dump($insert);
//       $num =  Db::table('t1')->increment('count');
//       var_dump($num);
//         $num =  Db::table('t1')->increment('count',10);
//       var_dump($num);
//         $num =  Db::table('t1')->decrement('count',10);
//       var_dump($num);
//          $num =  Db::table('t1')->where('id',1)->decrement('count',10,['author'=>'ddd']);
//       var_dump($num);
//        
//          $num =  Db::table('t1')->where('id','<=',3)->delete();
//       var_dump($num);
        //清空数据表，谨慎操作
//        Db::table('t1')->truncate();
//        $member =  Member::all();
//        dd($member);
//        $mem = Member::find(2);
//        dd($mem);
//        $count = Member::count();
//        echo $count;
//        $mem = Member::findorFail(3);
//        dd($mem);
//        $M = new Member();
//        $M->name = "jly";
//        $M->count = 20;
//        $bool = $M->save();
//        dd($bool);
//        $m = Member::create(
//                ['name'=>'imooc','count'=>20]
//        );
//        dd($m);
//        $m = Member::firstOrCreate([
//            'name'=>'iccc'
//        ]);
//        dd($m);
//        $m = Member::firstOrNew([
//            'name'=>'jly1'
//        ]);
//        $bool = $m->save();
//        dd($bool);
//        $m = Member::find(7);
//        $m->name = "aaa";
//        $bool = $m->save();
//        var_dump($bool);
//        
//        $num = Member::where('id','>',3)->update([
//            'count'=>40
//        ]);
//        var_dump($num);
        //通过模型删除
//        $m = Member::find(2);
//        $bool = $m->delete();
//        var_dump($bool);
        //通过主键删除
//        $n = Member::destroy(5,6);
//        var_dump($n);
        //blade模板测试
//        return view('layouts.child');
    }

    public function canshu(\Symfony\Component\HttpFoundation\Request $request) {
        //取值
//        echo $request->input('age');
//        echo $request->input('sex','未知');
//        if($request->has('name')){
//            echo $request->input('name');
//        }else{
//            echo "无参数";
//        }
//        
//        $res = $request->all();
//        dd($res);
        //判断请求类型
//        echo $request->method();
//        echo 1;
//        if($request->isMethod('GET')){
//            echo "yes";
//        }else{
//            echo "no";
//        }
//        $res = $request->ajax();
//        var_dump($res);
//        $res = $request->is('member/*');
//        var_dump($res);
        //获取当前url
//        echo $request->url();
    }

    public function session1(\Symfony\Component\HttpFoundation\Request $request) {
        //http request session\
//        $request->session()->put('key1','value1');
//        echo $request->session()->get('key1');
        //session()
//        session()->put('key2','value2');
//        echo session()->get('key2');
        //Session
        //存储数据到Session
//        Session::put('key3','value3');
//        取出Session的值
//        echo Session::get('key3');
//        不存在取默认值
//        echo Session::get('key4','default');
//        以数组的形式存储数据
//        Session::put(['key4'=>'value4']);
//         echo Session::get('key4','default');
        //把数据放到Session的数组中
//        Session::push('student','sean');
//        Session::push('student','imooc');
//        $res = Session::get('student','default');
//       var_dump($res);
        //取出数据并删除
//         $res = Session::pull('student','default');  
//        var_dump($res);
        //取出所有的值
//         $res =  Session::all();
//      dd($res);
        //判断session中某个key是否存在
//          if (Session::has('key1')) {
//            $res = Session::all();
//            dd($res);
//        } else {
//            echo "你们老大不在";
//        }
        //删除session中指定的key的值
//        $res = Session::all();
//        var_dump($res);
//        Session::forget('key1');
        //获取session中所有的数据
//        $res = Session::all();
//        var_dump($res);
        //清空所有的session
//        Session::flush();
//        $res = Session::all();
//        var_dump($res);
        Session::flash('key-flash', 'val-flash');
    }

    public function session2(\Symfony\Component\HttpFoundation\Request $request) {
//        echo Session::get('key-flash');
//        return "helolo";
        return Session::get('message','zanddddwu');
        
    }

    //响应json
    public function response() {
        //响应json
//        $data = [
//            'errCode' => 0,
//            'errMsg' => 'success',
//            'data' => 'sean'
//        ];
//        return response()->json($data);
        
        //重定向
//        return redirect('session2');
        
//        return redirect('session2')->with('message','快三数据');
        //action
//        return redirect()->action('MemberController@session2')->with('message','快三数据dddd');
        
        
        //route()
//        return redirect()->route('session2')->with('message','快三数据1111');
        //back()  返回上一页面
        return redirect()->back();
    }
    
    
    //活动的宣传页面
    public function activity0(){
        return "活动快要开始啦，敬请期待";
    }
    
    //活动的宣传页面
    public function activity1(){
        return "互动进行中，谢谢您的参与1";
    }
    
    
    //活动的宣传页面
    public function activity2(){
        return "互动进行中，谢谢您的参与2";
    }

}
