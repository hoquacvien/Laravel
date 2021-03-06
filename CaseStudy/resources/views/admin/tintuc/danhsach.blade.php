@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tin Tức
                    <small>Danh Sách</small>
                </h1>
            </div>
                @if (session('thongbao'))
                    <div class="alert alert-success">
                        {{session('thongbao')}}
                    </div>
                @endif
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Tiêu Đề</th>
                        <th>Tóm tắt</th>
                        <th>Thể Loại</th>
                        <th>Loại Tin</th>
                        <th>Số Lượt Xem</th>
                        <th>Nổi Bật</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tintuc as $tt)
                    <tr class="odd gradeX" align="center">
                        <td>{{$tt->id}}</td>
                        <p><td>{{$tt->TieuDe}}</p>
                            <img width="100px" src="upload/tintuc/{{$tt->Hinh}}"></td>
                        <td>{{$tt->TomTat}}</td>
                        <td>
                            {{$tt->loaitin->theloai->Ten}}
                        </td>
                        <td>
                            {{$tt->loaitin->Ten}}
                        </td>
                        <td>{{$tt->SoLuotXem}}</td>
                        <td>@if($tt->NoiBat ==0)
                            {{'Không'}}
                            @else{{'Có'}}
                            @endif
                        </td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/tintuc/xoa/{{$tt->id}}" onclick="return confirm('Bạn có muốn xóa không?')"> Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/tintuc/sua/{{$tt->id}}">Edit</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@yield('script')
@endsection