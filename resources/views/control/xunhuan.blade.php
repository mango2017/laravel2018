<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<!--for--->
@for($i=1;$i<=100;$i++)
{{$i}}<br/>
@endfor
<!--foreach-->
@foreach($users as $k=>$v)
{{$v}}
@endforeach
</body>
</html>