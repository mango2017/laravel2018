<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
</head>
<body>
<span>@yield('span')</span>
<div style="height:300px;background: red"></div>

@section('content')
<div style="height:300px;background: pink"></div>
@show

@section('footer')
<div style="height:300px;background: peru"></div>
@show


@section('js')

@show
</body>
</html>
