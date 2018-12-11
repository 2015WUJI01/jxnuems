<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('page-title')</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                        <li><a href="{{ url('/') }}">首页</a></li>
                        @if(Auth::check())
                            @switch(Auth::user()->user_type)
                                @case('college')<li><a href="{{ route('home') }}">学院之家</a></li>@break
                                @case('student')<li><a href="{{ route('home') }}">学生之家</a></li>@break
                                @case('teacher')<li><a href="{{ route('home') }}">教师之家</a></li>@break
                                @default其他
                            @endswitch
                        @endif
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    <?php
                                        $table = Auth::user()->user_type . 's';
                                        $auth = \Illuminate\Support\Facades\DB::table($table)
                                            ->where('number', '=', Auth::user()->account)
                                            ->select('Name as name')
                                            ->first();
                                        echo $auth->name;
                                    ?>
                                    {{--<small>--}}
                                        {{--@switch(Auth::user()->user_type)--}}
                                            {{--@case(1)（学院）@break--}}
                                            {{--@case(2)（学生）@break--}}
                                            {{--@case(3)（教师）@break--}}
                                            {{--@default（其他）--}}
                                        {{--@endswitch--}}
                                    {{--</small>--}}
                                    <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    @switch(Auth::user()->user_type)
                                        @case('college'){{-- 学院 --}}

                                        @break
                                        @case('student'){{-- 学生 --}}
                                        <li><a href="{{ route('profile') }}">个人信息</a></li>
                                        <li><a href="{{ route('account') }}">账号信息</a></li>
                                        @break
                                        @case('teacher'){{-- 教师 --}}
                                        <li><a href="{{ route('profile') }}">个人信息</a></li>
                                        <li><a href="{{ route('account') }}">账号信息</a></li>
                                        @break
                                        @default
                                    @endswitch
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            退出登录
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
