@extends('layout.index')
@section('content')
<div class="container">
	<div class="row carousel-holder">
	    <div class="col-md-2">
	    </div>
	    <div class="col-md-8">
	        <div class="panel panel-default">
			  	<div class="panel-heading">Thông tin tài khoản</div>
			  	<div class="panel-body">
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
			    	<form action="nguoidung" method="post">
			    		@csrf
			    		<div>
			    			<label>Họ tên</label>
						  	<input type="text" class="form-control" placeholder="Username" name="name" aria-describedby="basic-addon1" value="{{Auth::user()->name}}">
						</div>
						<br>
						<div>
			    			<label>Email</label>
						  	<input type="email" class="form-control" placeholder="Email" name="email" aria-describedby="basic-addon1" readonly value="{{Auth::user()->email}}" 
						  	>
						</div>
						<br>	
						<div class="form-group">
                        	<input type="checkbox" name="changePassword" id="changePassword">
                        	<label>Đổi mật khẩu</label>
                        	<input class="form-control password" name="password" placeholder="Nhập mật khẩu" type="password" disabled="" />
                    	</div>
                    	<div class="form-group">
                        	<label>Nhập lại Password</label>
                        	<input type="password" name="passwordAgain"class="form-control password" placeholder="Nhập lại mật khẩu" disabled="">
                   		</div>
							<br>
						<button type="submit" class="btn btn-default">Sửa
						</button>
			    	</form>
			  	</div>
			</div>
	    </div>
	    <div class="col-md-2">
	    </div>
	</div>
</div>
@endsection

@section('script')
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