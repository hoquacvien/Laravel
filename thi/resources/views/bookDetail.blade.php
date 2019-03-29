
@extends('layouts.master')

@section('content')

<p>book name: {{$book->book_name}}</p>
<p>author name: {{$book->author_name}}</p>
<p>description: {{$book->description }}</p>
<p>published date: {{$book->published_date }}</p>
<p>book quantity: {{$book->book_quantity}}</p>
@endsection