<?php

namespace App\Http\Middleware;
use Closure;
//中间件
class Activity{
    //前置操作
//    public function handle($request,Closure $next){
//        if(time() <strtotime('2018-06-03')){
//            return redirect('activity0');
//        }
//        return $next($request);
//        
//    }
    
    //后置操作
    
     public function handle($request,Closure $next){
        
       $response = $next($request);
        var_dump($response);
        
        //逻辑在请求后面执行
        echo "我是后置操作";
    }
}

