@extends('layouts.master')
@section('content')
<form action="{{route('storeBook')}}" method="post" >
	@csrf
	<h3>book name:<input type="text" name="book_name" placeholder="insert book name"><br></h3>
	<h3>author name:<input type="text" name="author_name" placeholder="insert author name"><br></h3>
	<h3>desc: <textarea name="description" id="" cols="60" rows="5" placeholder="insert desc"></textarea><br></h3>
	<h3>published date:<input type="date" name="published_date"><br></h3>
	<h3>book quantity:<input type="number" name="book_quantity"><br></h3>
	<input type="submit" value="create"><br>
</form>
@endsection