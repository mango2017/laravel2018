<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action="{{url('goods/insert')}}" method="post">
    {{csrf_field()}}
    用户名：<input type="text" name="username"><br/>
    密  码：<input type="password" name="password"><br/>
    <input type="submit" value="提交"/>
</form>
</body>
</html>