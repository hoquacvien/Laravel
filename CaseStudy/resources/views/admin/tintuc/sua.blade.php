@extends('admin.layout.index')
@section ('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tin Tức
                    <small>{{$tintuc->TieuDe}}</small>
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
                <form action="admin/tintuc/sua/{{$tintuc->id}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Thể Loại</label>
                        <select name="TheLoai" id="TheLoai" class="form-control">
                            @foreach($theloai as $tl)
                            <option
                            @if($tintuc->loaitin->theloai->id == $tl->id) {{"selected"}}
                            @endif
                             value="{{$tl->id}}">{{$tl->Ten}}
                         </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Loại Tin</label>
                        <select name="LoaiTin" id="LoaiTin" class="form-control">
                            @foreach($loaitin as $lt)
                            <option
                            @if($tintuc->loaitin->theloai->id == $lt->id) {{"selected"}}
                            @endif
                             value="{{$lt->id}}">{{$lt->Ten}}
                         </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Tiêu Đề</label>
                        <input class="form-control" name="TieuDe" placeholder="Nhập tiêu đề" value="{{$tintuc->TieuDe}}">
                    </div>
                    <div class="form-group">
                        <label>Tóm Tắt</label>
                        <textarea name="TomTat" id="demo" class="form-control ckeditor" row="3">{{$tintuc->TomTat}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Nội Dung</label>
                        <textarea name="NoiDung" id="demo" class="form-control ckeditor" row="5">{{$tintuc->NoiDung}}
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label>Hình Ảnh</label>
                        <p>
                        <img src="upload/tintuc/{{$tintuc->Hinh}}" width="400px">
                        </p>
                        <input type="file" name="Hinh" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Nổi Bật</label>
                        <label class="radio-inline">
                            <input name="NoiBat" value="0"
                            @if ($tintuc->NoiBat == 0)
                            {{'checked'}}
                            @endif
                            type="radio">Không
                        </label>
                        <label class="radio-inline">
                            <input name="NoiBat" value="1"
                            @if($tintuc->NoiBat == 1)
                            {{'checked'}}
                            @endif type="radio">Có
                        </label>
                    </div>
                    <button type="submit" class="btn btn-default">Sửa</button>
                    <button type="reset" class="btn btn-default">Làm mới</button>
                <form>
            </div>
        </div>
    </div>
</div>
@yield('script')
@endsection