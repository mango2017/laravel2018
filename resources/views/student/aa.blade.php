@extends('common.layouts')

@section('content')

@include('common.message')

<!-- 自定义内容区域 -->
<div class="panel panel-default">
    <div class="panel-heading">学生列表</div>
    <table class="table table-striped table-hover table-responsive">
        <thead>
            <tr>
                <th>ID</th>
                <th>姓名</th>
                <th>年龄</th>
                <th>性别</th>
                <th>关联id</th>
                <th>关联时间</th>
                <th>c1</th>
                <th>c2</th>

            </tr>
        </thead>
        <tbody>
            @foreach($a as $student)
            <tr>
                <th scope="row">{{$student->id}}</th>
                <td>{{$student->name}}</td>
                <td>{{$student->age}}</td>
                <td>{{$student->sex}}</td>
                <td>{{$student->accounts->student_id}}</td>
                <td>{{$student->accounts->created_at}}</td>
                <td>{{$student->accounts->c1}}</td>
                <td>{{$student->accounts->c2}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- 分页  -->
<div>


</div>
@stop
