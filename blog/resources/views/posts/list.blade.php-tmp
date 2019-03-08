@extends('posts/home')
@section('title', 'Danh sách công viêc')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2>Danh sách công viêc</h2>
        </div>
        <div class="col-12">
            @if (Session::has('success'))
                <p class="text-success">
                    <i class="fa fa-check" aria-hidden="true"></i>
                    {{ Session::get('success') }}
                </p>
            @endif
        </div>
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên công việc</th>
                    <th scope="col">Nội dung</th>
                    <th scope="col">Ảnh</th>
                    <th scope="col">Ngày hết hạn</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($posts as $key => $post)
                <tr>
                    <th scope="row">{{ ++$key }}</th>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->content }}</td>
                    <td>

                        <img src="{{ asset('storage/'.$post->image) }}" alt="" style="width: 200px; height: 200px">



                    </td>
                    <td>{{ $post->date }}</td>
                    <td><a href="#">sửa</a></td>
                    <td><a href="#" class="text-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')">xóa</a></td>
                </tr>
                @endforeach
                </tbody>
            </table>
            <a href="{{route('posts.create')}}" class="btn btn-primary">Thêm mới</a>
        </div>
    </div>
@endsection