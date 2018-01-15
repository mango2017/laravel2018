<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action="{{url('upload')}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <input type="file" name="file"/>
    <input type="submit" value="提交"/>
</form>
</body>
</html>