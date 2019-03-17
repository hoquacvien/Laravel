@extends('layout.index')
@section('content')
<div class="container">
	@include('layout.slide')
    <div class="space20"></div>
    <div class="row main-left">
        @include('layout.menu')
        <div class="col-md-9">
            <div class="panel panel-default">            
            	<div class="panel-heading" style="background-color:#337AB7; color:white;" >
            		<h2 style="margin-top:0px; margin-bottom:0px;">Liên hệ</h2>
            	</div>
                @foreach($lienhe as $lh)
            	<div class="panel-body">
                    <h3><span class="glyphicon glyphicon-align-left"></span> {{$lh->Ten}}</h3>
				    
                    <div class="break"></div>
				   	<h4><span class= "glyphicon glyphicon-home "></span> Địa chỉ : </h4>
                    <p>{{$lh->DiaChi}} </p>

                    <h4><span class= "  glyphicon glyphicon-phone "></span> SDT : </h4>
                    <p>{{$lh->SDT}} </p>
                @endforeach
                    <br><br>
                    <h3><span class="glyphicon glyphicon-globe"></span> Bản đồ</h3>
                    <div class="break"></div><br>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d122445.89064291686!2d107.50707199761796!3d16.45354346063613!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3141a115e1a7935f%3A0xbf3b50af70b5c7b7!2zVHAuIEh14bq_LCBUaOG7q2EgVGhpw6puIEh14bq_LCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1552726563590" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

				</div>
            </div>
    	</div>
    </div>
</div>
@endsection