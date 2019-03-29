<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="trangchu">Laravel Đọc Sách</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="gioithieu">Giới thiệu</a>
                </li>
                <li>
                    <a href="lienhe">Liên hệ</a>
                </li>
            </ul>

            <form action="timkiem" method="post" class="navbar-form navbar-left" role="search">
                @csrf
		        <div class="form-group">
		          <input name="tukhoa" type="text" class="form-control" placeholder="Search">
		        </div>
		        <button type="submit" class="btn btn-default">Tìm</button>
		    </form>

		    <ul class="nav navbar-nav pull-right">
                @if(!Auth::user())
                    <li>
                        <a href="dangky">Ðăng ký</a>
                    </li>
                    <li>
                        <a href="dangnhap">Ðăng nhập</a>
                    </li>
                    @else
                    <li>
                    	<a href="nguoidung">
                    		<span class ="glyphicon glyphicon-user">{{Auth::user()->name}}</span>
                    	</a>
                    </li>
                    <li>
                    	<a href="dangxuat">Ðăng xuất</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>