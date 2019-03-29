@extends('admin.layout.index')
@section ('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">User
                    <small>{{$user->name}}</small>
                </h1>
            </div>
            <div class="col-lg-7" style="padding-bottom:120px">
                @if(count($errors)>0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $err)
                    {{$err}}<br>
                    @endforeach
                </div>
                @endif
                @if(session('thongbao'))
                    <div class="alert alert-success">{{session('thongbao')}}</div>
                @endif
                <form action="admin/user/sua/{{$user->id}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Họ Tên</label>
                        <input class="form-control" name="name" placeholder="Nhập tên người dùng" value="{{$user->name}}"/>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input class="form-control" name="email" placeholder="Nhập địa chỉ email" type="email" value="{{$user->email}}" readonly="" />
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="changePassword" id="changePassword">
                        <label>Đổi mật khẩu</label>
                        <input class="form-control password" name="password" placeholder="Nhập mật khẩu" type="password" disabled="" />
                    </div>
                    <div class="form-group">
                        <label>Nhập lại Password</label>
                        <input type="password" name="passwordAgain"class="form-control password" placeholder="Nhập lại mật khẩu" disabled="">
                    </div>
                    <div class="form-group">
                        <label>Quyền Người Dùng</label>
                        <label class="radio-inline">
                            <input name="quyen" value="0"
                            @if($user->quyen==0)
                            {{'checked'}}
                            @endif
                            type="radio">Thường Dân
                        </label>
                        <label class="radio-inline">
                            <input name="quyen" value="1"
                            @if($user->quyen==0)
                            {{'checked'}}
                            @endif
                            type="radio">Admin
                        </label>
                    </div>
                    <button type="submit" class="btn btn-default">Sửa</button>
                    <button type="reset" class="btn btn-default">Làm mới</button>
                <form>
            </div>
        </div>
    </div>
</div>
@endsection
@section ('script')
<script>
    $(document).ready(function(){
        $('#changePassword').change(function(){
            if($(this).is(":checked"))
            {
                $('.password').removeAttr('disabled');
            }
            else
            {
                $('.password').attr('disabled','');
            }
        });
    });
</script>
@yield('script')
@endsection