@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">个人账号信息</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="row">
                            <div class="col-md-12">

                                <form>
                                    <div class="form-group">
                                        <label for="accountInput">学号</label>
                                        <input type="text" class="form-control" id="accountInput"
                                               placeholder="学号" value="{{ Auth::user()->account }}" readonly>
                                    </div>
                                    <div class="form-group">

                                        <label for="nameInput">姓名</label>
                                        <input type="text" class="form-control" id="nameInput"
                                               placeholder="姓名" value="{{ Auth::user()->account }}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="emailInput">邮箱</label>
                                        <input type="email" class="form-control" id="emailInput"
                                               placeholder="邮箱"
                                               value="{{ Auth::user()->email ? Auth::user()->email : '空'}}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="emailInput">性别</label>
                                        <select name="gender" id="gender" class="form-control" disabled>
                                            <option value="0" {{ Auth::user()->gender ?: 'selected' }}>女</option>
                                            <option value="1" {{ Auth::user()->gender ?: 'selected' }}>男</option>
                                            <option value="" {{ Auth::user()->gender ? : 'selected' }}>未选择</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary pull-right">修改</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection