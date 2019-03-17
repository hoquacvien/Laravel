@extends('layout.index')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-9">
            <h1>{{$tintuc->TieuDe}}</h1>
            <p class="lead">
                by <a href="#">Admin</a>
            </p>
            <img class="img-responsive" src="upload/tintuc/{{$tintuc->Hinh}}" alt="">
            <p><span class="glyphicon glyphicon-time"></span> Posted on: {{$tintuc->created_at}}</p>
            <hr>
            <p class="lead">{!!$tintuc->NoiDung!!}</p>
            <hr>
            @if(Auth::user())
            <div class="well">
                @if(session('thongbao'))
                    {{session('thongbao')}}
                @endif
                <h4>Viết bình luận ...<span class="glyphicon glyphicon-pencil"></span></h4>
                <form role="form" action="comment/{{$tintuc->id}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <textarea name="NoiDung" class="form-control" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Gửi</button>
                </form>
            </div>
            @endif
            <hr>
            @foreach($tintuc->comment as $cm)
            <div class="media">
                <a class="pull-left" href="#">
                    <img class="media-object" src="http://placehold.it/64x64" alt="">
                </a>
                <div class="media-body">
                    <h4 class="media-heading">{{$cm->user->name}}
                        <small>{{$cm->created_at}}</small>
                    </h4>
                   {{$cm->NoiDung}}
                </div>
            </div>
            @endforeach
        </div>
        <div class="col-md-3">

            <div class="panel panel-default">
                <div class="panel-heading"><b>Tin liên quan</b></div>
                <div class="panel-body">
                    @foreach($tinlienquan as $tt)
                    <div class="row" style="margin-top: 10px;">
                        <div class="col-md-5">
                            <a href="tintuc/{{$tt->id}}/{{$tt->TieuDeKhongDau}}.html">
                                <img class="img-responsive" src="upload/tintuc/{{$tt->Hinh}}" alt="">
                            </a>
                        </div>
                        <div class="col-md-7">
                            <a href="#"><b>{{$tt->TieuDe}}</b></a>
                        </div>
                        <p style="padding-left: 7px;">{{$tt->TomTat}}</p>
                        <div class="break"></div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading"><b>Tin nổi bật</b></div>
                <div class="panel-body">
                @foreach($tinnoibat as $tt)
                    <div class="row" style="margin-top: 10px;">
                        <div class="col-md-5">
                            <a href="tintuc/{{$tt->id}}/{{$tt->TieuDeKhongDau}}.html">
                                <img class="img-responsive" src="upload/tintuc/{{$tt->Hinh}}" alt="">
                            </a>
                        </div>
                        <div class="col-md-7">
                            <a href="#"><b>{{$tt->TieuDe}}</b></a>
                        </div>
                        <p style="padding-left: 7px;">{{$tt->TomTat}}</p>
                        <div class="break"></div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection