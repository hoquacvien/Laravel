@extends('layouts.master')
@section('content')
<table border="1">
	<tr>
		<th>
			#
		</th>
		<th>
			title
		</th>
		<th>
			author
		</th>
		<th>
			published date
		</th>
		<th colspan="2">
			action
		</th>
	</tr>
	@foreach($book as $key => $book)
	<tr>
		<th>{{++$key}}</th>
		<th>{{$book->book_name}}</th>
		<th>{{$book->author_name}}</th>
		<th>{{$book->published_date}}</th>
		<th><a href="{{route('book_Detail',$book->id)}}">show Info</a></th>
		<th><a href="{{route('delete_book',$book->id)}}">delete</a></th>
	</tr>
	@endforeach
</table>

@endsection