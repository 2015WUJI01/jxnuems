@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-md-offset-1">
                <div class="list-group">
                    <a href="{{ route('profile') }}"
                       class="list-group-item {{ url()->current() == url('profile') ? 'active' : ''}}">个人信息</a>
                    <a href="{{ route('account') }}"
                       class="list-group-item {{ url()->current() == url('account') ? 'active' : ''}}">账号信息</a>
                </div>
            </div>
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading">@yield('panel-title')</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="row">
                            <div class="col-md-12">

                                @yield('form')

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection