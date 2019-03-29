@extends('layouts.master')
@section('content')
<form action="{{route('storeBook')}}" method="post" >
	@csrf
	<div class="row">
        <div class="col-xs-4 col-xs-offset-4">
            <h1>Add new contact</h1>
                        <form method="post">
                <div class="form-group">
                    <label>First Name</label>
                    <input type="text" name="first-name" class="form-control">
                </div>
                <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" name="last-name" class="form-control">
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" name="phone" class="form-control">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" name="address" class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit" value="Search" class="form-control btn-success">
                </div>
            </form>
        </div>
    </div>
</form>
@endsection