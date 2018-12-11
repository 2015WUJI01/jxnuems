@extends('student._info')

@section('page-title', '个人基本信息')

@section('panel-title', '个人基本信息')

@section('form')
    <form>
        <div class="form-group">
            <label for="accountInput">学号</label>
            <input type="text" class="form-control" id="accountInput"
                   placeholder="学号" value="{{ $user->number }}" readonly>
        </div>
        <div class="form-group">

            <label for="nameInput">姓名</label>
            <input type="text" class="form-control" id="nameInput"
                   placeholder="姓名" value="{{ $user->name }}" readonly>
        </div>
        <div class="form-group">
            <label for="genderInput">性别</label>
            <select name="genderInput" id="genderInput" class="form-control" disabled>
                {{--<option value="0" {{ $user->gender ? 'selected' : ''}}>女</option>--}}
                {{--<option value="1" {{ $user->gender ? 'selected' : ''}}>男</option>--}}
                <option value="{{ $user->gender }}"
                        selected>{{ $user->gender == 0 ? '女' : '男'}}</option>
            </select>
        </div>
        <div class="form-group">
            <label for="telInput">联系电话</label>
            <input type="text" class="form-control" id="telInput"
                   placeholder="联系电话"
                   value="{{ $user->tel ? $user->tel : '' }}" readonly>
        </div>
        <div class="form-group">
            <label for="emailInput">邮箱</label>
            <input type="email" class="form-control" id="emailInput"
                   placeholder="邮箱"
                   value="{{ $user->email ? $user->email : '' }}" readonly>
        </div>
        <a href="{{ route('profile.edit') }}" type="submit" class="btn btn-primary">修改</a>
    </form>
@endsection