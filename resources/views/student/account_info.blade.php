@extends('student._info')

@section('page-title', '个人账号信息')

@section('panel-title', '个人账号信息')

@section('form')
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
        <button type="submit" class="btn btn-primary">修改</button>
    </form>
@endsection