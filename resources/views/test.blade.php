<DOCTYPE html></DOCTYPE>
<html>
<head>
    <style>
        div{
            width: 1000px;
            height: 300px;
            border: 1px solid black;
        }
    </style>
</head>
<body>
<div class="m1">
    @section('m1')
    <h1>模板位置1</h1>
    @show
</div>
<div class="m2">
    {{--@section('m2')--}}
    {{--<h1>模板位置2</h1>--}}
    {{--@show--}}
    @yield('m2', '主要内容区域')
</div>
<div class="'m3">
    @section('m3')
    <h1>模板位置3</h1>
    @show
</div>
</body>
</html>
