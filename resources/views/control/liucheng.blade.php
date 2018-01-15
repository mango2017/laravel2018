<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
给你买一个
@if($total >=90 && $total <=100)  //不能加{}
    游戏机
@elseif($total >=80 && $total <90)
    望远镜
@else
    锤子
@endif
<hr>
<input type="radio" name="sex" value="1" @if($sex==1) checked="checked" @endif>男
<input type="radio" name="sex" value="0" @if($sex==0) checked="checked" @endif>女
</body>
</html>