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
	            		<h2 style="margin-top:0px; margin-bottom:0px;">Giới thiệu</h2>
	            	</div>
                    @foreach($gioithieu as $gt)
	            	<div class="panel-body">
					   <p>
					   	{{$gt->GioiThieu}}			   	
					   </p>
					</div>
                    @endforeach
	            </div>
        	</div>
        </div>
</div>