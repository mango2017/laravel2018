<?php

namespace App\Http\Middleware;

use Closure;
//生成的中间件文件
class TeacherMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //记录该请求的路径
        //$path = $request->path();
        //将字符串路径存入日志中
        //file_put_contents('request.log',$path."\r\n",FILE_APPEND);

        if(!session('uid')){
            //跳转到某个url
            return redirect('http://www.baidu.com');
        }


        //进入下一层代码执行
        return $next($request);
    }
}
