<?php

namespace App\Http\Controllers;

use App\Student;
use  \Illuminate\Support\Facades\Cache;
use \Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
//use App\Accounts;

class StudentController extends Controller {

    public function index() {
        $students = Student::paginate(10);  //参数是每页显示的记录数

        return view('student/index', ['students' => $students]);
    }

    //渲染添加页面
    public function create(\Symfony\Component\HttpFoundation\Request $request) {
        $student = new Student();
        if ($request->isMethod('POST')) {
            //1.控制器验证
//            $this->validate($request,[
//                'Student.name'=>'required|min:2|max:20',
//                'Student.age'=>'required|integer',
//                'Student.sex'=>'required|integer',
//            ],['required'=>':attribute 为必填项','min'=>':attribute 长度不符合要求','integer'=>':attribute 必须为整数'],
//                    ['Student.name'=>'姓名',
//                     'Student.age'=>'年龄',
//                     'Student.sex'=>'性别']);
            //validator类验证
            $validator = \Validator::make($request->input(), [
                        'Student.name' => 'required|min:2|max:20',
                        'Student.age' => 'required|integer',
                        'Student.sex' => 'required|integer',
                            ], ['required' => ':attribute 为必填项', 'min' => ':attribute 长度不符合要求', 'integer' => ':attribute 必须为整数'], ['Student.name' => '姓名',
                        'Student.age' => '年龄',
                        'Student.sex' => '性别'
            ]);
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            $data = $request->input('Student'); //获取数据
            if (Student::create($data)) {
                return redirect('student/index')->with('success', '保存成功');
            } else {
                return redirect()->back();
            }
        }
        $student->sex=null;  //防报错设置
    
        return view('student/create', ['student' => $student]);
    }

    //保存添加
//    public function saves(\Symfony\Component\HttpFoundation\Request $request){
    public function saves(\Symfony\Component\HttpFoundation\Request $request) {
        $data = $request->input('Student');
        $student = new Student();
        $student->name = $data['name'];
        $student->age = $data['age'];
        $student->sex = $data['sex'];
        if ($student->save()) {
            return redirect('student/index');
        } else {
            return redirect()->back();
        }
    }

    //渲染修改页面
    public function update(\Symfony\Component\HttpFoundation\Request $request, $id) {
        $student = Student::find($id);
        if ($request->isMethod("POST")) {

            $this->validate($request, [
                'Student.name' => 'required|min:2|max:20',
                'Student.age' => 'required|integer',
                'Student.sex' => 'required|integer',
                    ], [
                'required' => ':attribute 为必填项',
                'min' => ':attribute 长度不符合要求',
                'integer' => ':attribute 必须为整数'
                    ], ['Student.name' => '姓名',
                'Student.age' => '年龄',
                'Student.sex' => '性别'
            ]);
            $data = $request->input('Student');
            $student->name = $data['name'];
            $student->age = $data['age'];
            $student->sex = $data['sex'];
            if ($student->save()) {
                return redirect('student/index')->with('success', '修改成功-' . $id);
            }
        }
        return view('student.update', compact('student'));
    }

    //详情
    public function detail($id) {
        $student = Student::find($id);
        return view('student.detail', compact('student'));
    }

    //删除
    public function delete($id) {
        $student = Student::find($id);
        if($student->delete()){
            return redirect('student/index')->with("success",'删除成功-'.$id);
        }else{
             return redirect('student/index')->with("error",'删除失败-'.$id);
        }
    }
    
    //文件上传
    public function upload(\Illuminate\Http\Request $request){
        if($request->isMethod('POST')){
           $file = $request->file('source');
           //文件是否上传成功
           if($file->isValid()){
               //原文件名
               $originalName = $file->getClientOriginalName();
               //扩展名
               $ext = $file->getClientOriginalExtension();
               //MimeType
               $type = $file->getClientMimeType();
               //临时绝对路径
               $realPath = $file->getRealPath();
               //文件名
               $filename = date('Y-m-d-H-i-s')."-".uniqid().".".$ext;
               
               $bool = \Illuminate\Support\Facades\Storage::disk('uploads')->put($filename, file_get_contents($realPath));
               var_dump($bool);
           }
        }
        return view('student.upload');
    }
    
    
    //缓存
    public function cache1(){
//        Cache::put('key1', 'value1', 5);
        $bool = Cache::add('key2', 'value2', 2);
        var_dump($bool);
    }
    
    
    public function cache2(){
//        echo Cache::get('key1');
//        echo Cache::get('key2');
//        echo Cache::pull('key2');
        Cache::forget('key1');
        
    }
    
    
    //错误页面
    public function error(){
//        var_dump($name);
//        $student = null;
//        if($student == null){
//            abort('500');
//        }
//                
//        return  view('student.error');
//        Log::info("这是一个info级别的错误文件");
        Log::warning("这是一个warning级别的错误文件");
        Log::error("这是一个数组",['name'=>'aaa','age'=>18]);
//        Log::info("这是一个info级别的错误文件");
        
        
    }
    
    
    //队列
    public function queue(){
        dispatch(new \App\Jobs\SendEmail("1210056515@qq.com")) ;
    }
    
    
    //发送邮件
    public function mail(){
        Mail::raw('邮件内容',function($message){
           $message->from("1210056515@qq.com","fdsfds"); 
           $message->subject("邮件的主题测试");
           $message->to('496745423@qq.com');
                   
                   
        });
    }
    
    
    //测试关联模型
    //http://localhost/laravel/public/index.php/moxing
    public function moxing(){
        $a = Student::with('accounts')->get();
        return view('student.aa', compact('a'));
    }
    
    
    
    
    
  
    

}
