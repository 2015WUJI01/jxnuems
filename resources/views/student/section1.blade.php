@extends('test')

@section('m1')
    @parent
    header
@stop

@section('m2')
    content
    {{--模板中输出php变量--}}
    <p>{{$name}}</p>
    {{--模板中调用PHP代码--}}
    <p>{{time()}}</p>
    <p>{{date('Y-m-d H:i:s', time())}}</p>

    {{--调用子视图--}}
    @include('student.common1', ['message' => '略略略'])

    {{--链接--}}
    <a href="{{url('url')}}">url()</a>
    <a href="{{action('StudentController@urlTest')}}">action()</a>
    <a href="{{route('url')}}">route()</a>
@stop